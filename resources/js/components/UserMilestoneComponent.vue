<template>
    <div>
        <div class="wt-formtheme wt-skillsform">
            <transition name="fade">
                <div v-if="isShow" class="sj-jump-messeges">{{ trans('lang.no_record') }}</div>
            </transition>
            <fieldset>
                <div class="form-group">
                    <div class="form-group-holder">
                        <span class="wt-select">
                            <input type="text" class="form-control" :placeholder="ph_amount" maxlength="100" :id="freelancer_milestone">
                        </span>
                        <input type="number" class="form-control" :placeholder="0" :id="selected_milestone_amount" name="mile_amount" min="1" max="">
                    </div>
                </div>
                <div class="form-group wt-btnarea">
                    <a href="javascript:void(0);" class="wt-btn" @click="addMilestone">{{trans('lang.add_another')}}</a>
                </div>
            </fieldset>
        </div>
        <div class="wt-myskills">
            <ul id="milestone_list" class="sortable list">
                <li v-for="(freelancer_milestone, index) in freelancer_milestones" :key="index" v-if="freelancer_milestones" class="skill-element" :ref="'skill-'+index">
                    <div class="wt-dragdroptool">
                        <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                    </div>
                    <span class="skill-dynamic-html">
                        {{freelancer_milestone.title}} (<em class="skill-val">{{freelancer_milestone.pivot.skill_rating}}</em>%)</span>
                    <span class="skill-dynamic-field sss">
                        <input type="hidden" v-bind:name="'skills['+index+'][id]'" :value="freelancer_milestone.id">
                        <input type="text" v-bind:name="'skills['+index+'][rating]'" :value="freelancer_milestone.pivot.skill_rating">
                    </span>
                    <div class="wt-rightarea">
                        <a href="javascript:void(0);" class="wt-deleteinfo delete-skill" @click="removeStoredMilestone(index)"><i class="lnr lnr-trash"></i></a>
                    </div>
                </li>
                <li v-for="(skill, index) in skills" :key="index+skill.count">
                    <div class="wt-dragdroptool">
                        <a href="javascript:void(0)" class="lnr lnr-menu"></a>
                    </div>
                    <span class="skill-dynamic-html">{{skill.title}} (<em class="skill-val">{{skill.rating}}</em>%)</span>
                    <span class="skill-dynamic-field">
                        <input type="hidden" v-bind:name="'skills['+[skill.count]+'][id]'" :value="skill.id">
                        <input type="text" v-bind:name="'skills['+[skill.count]+'][rating]'" :value="skill.rating">
                    </span>
                    <div class="wt-rightarea">
                        <a href="javascript:void(0);" class="wt-addinfo"><i class="lnr lnr-pencil"></i></a>
                        <a href="javascript:void(0);" class="wt-deleteinfo" @click="removeMilestoneList(index)"><i class="lnr lnr-trash"></i></a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</template>
<style>
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.3s;
}
.fade-enter,
.fade-leave-to {
  opacity: 0;
}
</style>
<script>
 export default{
    props: ['widget_title', 'ph_amount'],
        data(){
            return {
                isShow: false,
                stored_skills:[],
                selected_skill: '',
                selected_rating:'',
                selected_skill_text:'',
                edit_class: false,
                edit_skill: '',
                skill: {
                    id: '',
                    rating: '',
                    title:'',
                    count: 0
                },
                skills: [],
                freelancer_milestones: [],
                counts:0,
                notificationSystem: {
                    error: {
                        position: "topRight",
                        timeout: 4000
                    }
                },
            }
        },
        methods: {
            showError(error){
                return this.$toast.error(' ', error, this.notificationSystem.error);
            },
            getSkills(){
                let self = this;
                axios.get(APP_URL + '/get-freelancer-skills')
                .then(function (response) {
                    self.stored_skills = response.data.skills;
                });
            },
            getUserSkills(){
                let self = this;
                axios.get(APP_URL + '/freelancer/get-freelancer-skills')
                .then(function (response) {
                    self.freelancer_milestones = response.data.freelancer_milestones;
                });
            },
            addMilestone: function () {
                var skillsSelect = document.getElementById("freelancer_milestone");
                var amountSelect = document.getElementById("selected_milestone_amount");
                var skill_list_count = jQuery('.wt-btn').parents('.wt-skillsform').next('.wt-myskills').find('ul#milestone_list li').length;
                skill_list_count = skill_list_count - 1;
                this.skill.count = skill_list_count;
                
                if(skillsSelect.options[skillsSelect.selectedIndex]) {
                    this.selected_skill_text = skillsSelect.options[skillsSelect.selectedIndex].text;
                    this.selected_skill = document.getElementById("freelancer_milestone").value;
                    this.selected_rating = document.getElementById("selected_milestone_amount").value;
                    this.skills.push(Vue.util.extend({}, this.skill, this.skill.count++, this.skill.title = this.selected_skill_text, this.skill.id = this.selected_skill, this.skill.rating = this.selected_rating ))
                    skillsSelect.remove(skillsSelect.selectedIndex);
                    document.getElementById("selected_milestone_amount").value = '';
                } else {
                    this.isShow = true;
                    var self = this;
                    setTimeout(function () {
                        self.isShow = false;
                    }, 3000);
                    
                }
            },
            removeMilestoneList: function (index) {
                var self = this;
                this.$swal({
                    title: "Delete Milestone List",
                    text: "Are you Sure?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",
                    closeOnConfirm: true,
                    closeOnCancel: true,
                    showLoaderOnConfirm: true
                  }).then((result) => {
                    var self = this;
                    if(result.value) {
                        let option = self.skills[index];
                        var select = document.getElementById("freelancer_milestone");
                        select.options[select.options.length] = new Option(option.title, option.id, false, false);
                        self.skills.splice(index, 1);
                        self.$swal('Deleted', 'Milestone List Deleted', 'success')
                    } else {
                        this.$swal.close()
                    }
                  })
            },
            removeStoredMilestone: function (index) {
                var self = this;
                this.$swal({
                    title: "Delete Milestone List",
                    text: "Are you Sure?",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "Yes",
                    cancelButtonText: "No",
                    closeOnConfirm: true,
                    closeOnCancel: true,
                    showLoaderOnConfirm: true
                  }).then((result) => {
                    var self = this;
                    if(result.value) {
                        let option = self.freelancer_milestones[index];
                        //console.log(option);
                        var select = document.getElementById("freelancer_milestone");
                        select.options[select.options.length] = new Option(option.title, option.id, false, false);
                        self.freelancer_milestones.splice(index, 1);
                        self.$swal('Deleted', 'Milestone List Deleted', 'success')
                    } else {
                        this.$swal.close()
                    }
                  })
            }
        },
        mounted: function () {
            jQuery(document).on('click', '.wt-addinfo', function (e) {
                e.preventDefault();
                var _this = jQuery(this);
                _this.addClass('wt-skillsactive');
                _this.parents('li').addClass('wt-skillsaddinfo');
            });
            jQuery(document).on('click', '.wt-skillsactive', function (e) {
                e.preventDefault();
                var _this = jQuery(this);
                _this.removeClass('wt-skillsactive');
                _this.parents('li').removeClass('wt-skillsaddinfo');
                var edit_skill_value = _this.parents('li').find('.skill-dynamic-field input:text').val();
                _this.parents('li').find('.skill-dynamic-html em').html(edit_skill_value);
            });
        },
        created: function() {
            this.getSkills();
            this.getUserSkills();
        } 
    }
</script>