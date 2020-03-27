<template>
    <div>
        <div class="wt-experiencelisting-hold" v-for="(commentIndex, index) in commentsToShow" :key="index" v-if="certifications[index]">
            <div class="wt-experiencelisting wt-bgcolor">
                <div class="wt-title" v-if="certifications[index]">
                    <h3>{{ certifications[index].degree_title }}</h3>
                </div>
                <div class="wt-experiencecontent" v-if="certifications[index]">
                    <ul class="wt-userlisting-breadcrumb">
                        <!--<li><span><i class="far fa-building"></i> {{ certifications[index].institute_title }}</span></li>-->
                        <li><span><i class="far fa-calendar"></i> {{ certifications[index].start_date }}</span></li>
                        <!--<li><span><i class="far fa-calendar"></i> {{ certifications[index].start_date }} - {{ certifications[index].end_date }}</span></li>-->
                    </ul>
                    <div class="wt-description">
                        <p>“ {{certifications[index].description}} ”</p>
                    </div>
                </div>
            </div>
            <div class="divheight"></div>
            <div class="wt-btnarea">
                <a href="javascript:void(0);" class="wt-btn"  @click="commentsToShow += 3" v-if="commentsToShow < certifications.length">
                    {{ trans('lang.btn_load_more') }}
                </a>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props: ['freelancer_id', 'no_of_post'],
        data() {
            return {
                certifications: [],
                base_url:APP_URL,
                commentsToShow: this.no_of_post,
            }
        },
        methods: {
            getCertification(){
                let self = this;
                axios.post(APP_URL + '/get-freelancer-certification',{
                    id:self.freelancer_id
                })
                .then(function (response) {
                    self.certifications = response.data.certification;
                });
            },
        },
        mounted:function(){
            
        },
        created: function(){
            this.getCertification();
        },
    }
</script>