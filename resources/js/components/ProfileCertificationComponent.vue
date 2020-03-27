<template>
  <div>
    <div class="wt-tabscontenttitle wt-addnew">
      <h2>{{ trans('lang.add_your_prof_cert') }}</h2>
      <a
        href="javascript:void(0);"
        @click="addCertification"
        class="add-certification-btn"
      >{{ trans('lang.add_cert') }}</a>
    </div>
    <ul class="wt-experienceaccordion accordion" id="certification-list">
      <span v-if="stored_certifications" class="certification-inner-list">
        <li
          v-for="(stored_certification, index) in stored_certifications"
          :key="index"
          class="certification-element"
        >
          <div class="wt-accordioninnertitle">
            <span
              :id="'certificationaccordion-'+index+''"
              data-toggle="collapse"
              :data-target="'#certificationaccordioninner-'+index+''"
            >{{stored_certification.degree_title}} ({{stored_certification.start_date}})</span>
            <!--<span-->
            <!--  :id="'certificationaccordion-'+index+''"-->
            <!--  data-toggle="collapse"-->
            <!--  :data-target="'#certificationaccordioninner-'+index+''">{{stored_certification.degree_title}} ({{stored_certification.start_date}} - {{stored_certification.end_date}})</span>-->
            <div class="wt-rightarea">
              <a
                href="javascript:void(0);"
                class="wt-addinfo wt-skillsaddinfo"
                :id="'certificationaccordion-'+index+''"
                data-toggle="collapse"
                :data-target="'#certificationaccordioninner-'+index+''"
                aria-expanded="true"
              >
                <i class="lnr lnr-pencil"></i>
              </a>
              <a
                href="javascript:void(0);"
                class="wt-deleteinfo"
                @click="removeStoredCertification(index)"
              >
                <i class="lnr lnr-trash"></i>
              </a>
            </div>
          </div>
          <div
            class="wt-collapseexp collapse hide"
            :id="'certificationaccordioninner-'+index+''"
            :aria-labelledby="'certificationaccordion-'+index+''"
            data-parent="#accordion"
          >
            <fieldset>
              <div class="form-group form-group-half">
                <input
                  type="text"
                  :value="stored_certification.degree_title"
                  v-bind:name="'certification['+[index]+'][degree_title]'"
                  class="form-control"
                  :placeholder="ph_degree_title"
                />
              </div>
              <div class="form-group form-group-half">
                <date-pick v-model="stored_certification.start_date"></date-pick>
                <input
                  type="hidden"
                  v-bind:name="'certification['+[index]+'][start_date]'"
                  :value="stored_certification.start_date"
                />
              </div>
              <!--<div class="form-group form-group-half">-->
              <!--  <date-pick v-model="stored_certification.end_date"></date-pick>-->
              <!--  <input-->
              <!--    type="hidden"-->
              <!--    v-bind:name="'certification['+[index]+'][end_date]'"-->
              <!--    :value="stored_certification.end_date"-->
              <!--  />-->
              <!--</div>-->
              <!--<div class="form-group form-group-half">-->
              <!--  <input-->
              <!--    type="text"-->
              <!--    :value="stored_certification.institute_title"-->
              <!--    v-bind:name="'certification['+[index]+'][institute_title]'"-->
              <!--    class="form-control"-->
              <!--    :placeholder="ph_institute_title"-->
              <!--  />-->
              <!--</div>-->
              <div class="form-group">
                <textarea
                  :value="stored_certification.description"
                  v-bind:name="'certification['+[index]+'][description]'"
                  class="form-control"
                  :placeholder="ph_desc"
                ></textarea>
              </div>
              <div class="form-group">
                <span>{{ trans('lang.date_note') }}</span>
              </div>
            </fieldset>
          </div>
        </li>
      </span>
      <span class="certification-inner-list">
        <li
          v-for="(certification, index) in certifications"
          :key="index"
          ref="certificationlistelement"
          class="certification-inner-list-item"
        >
          <div class="wt-accordioninnertitle">
            <span
              :id="'certificationaccordion-'+certification.count+''"
              data-toggle="collapse"
              :data-parent="'#certificationaccordioninner-'+certification.count+''"
            >{{certification.degree_title}} ( {{certification.start_date}} )</span>
            <!--<span-->
            <!--  :id="'certificationaccordion-'+certification.count+''"-->
            <!--  data-toggle="collapse"-->
            <!--  :data-parent="'#certificationaccordioninner-'+certification.count+''">{{certification.degree_title}} ( {{certification.start_date}} - {{certification.end_date}} )</span>-->
            <div class="wt-rightarea">
              <a
                href="javascript:void(0);"
                class="wt-addinfo wt-skillsaddinfo"
                :id="'certificationaccordion-'+certification.count+''"
                data-toggle="collapse"
                :data-target="'#certificationaccordioninner-'+certification.count+''"
                aria-expanded="true"
              >
                <i class="lnr lnr-pencil"></i>
              </a>
              <a href="javascript:void(0);" class="wt-deleteinfo delete-certification">
                <i class="lnr lnr-trash"></i>
              </a>
            </div>
          </div>
          <div
            class="wt-collapseexp collapse hide"
            :id="'certificationaccordioninner-'+certification.count+''"
            :aria-labelledby="'certificationaccordion-'+certification.count+''"
            data-parent="#accordion"
          >
            <fieldset>
              <div class="form-group form-group-half">
                <input
                  type="text"
                  v-bind:name="'certification['+[certification.count]+'][degree_title]'"
                  class="form-control"
                  :placeholder="ph_degree_title"
                  v-model="certification.degree_title"
                />
              </div>
              <div class="form-group form-group-half">
                <date-pick v-model="certification.start_date"></date-pick>
                <input
                  type="hidden"
                  v-bind:name="'certification['+[certification.count]+'][start_date]'"
                  :value="certification.start_date"
                  :placeholder="ph_start_date"
                />
              </div>
              <!--<div class="form-group form-group-half">-->
              <!--  <date-pick v-model="certification.end_date"></date-pick>-->
              <!--  <input-->
              <!--    type="hidden"-->
              <!--    v-bind:name="'certification['+[certification.count]+'][end_date]'"-->
              <!--    :value="certification.end_date"-->
              <!--    :placeholder="ph_end_date"-->
              <!--  />-->
              <!--</div>-->
              <!--<div class="form-group form-group-half">-->
              <!--  <input-->
              <!--    type="text"-->
              <!--    v-bind:name="'certification['+[certification.count]+'][institute_title]'"-->
              <!--    class="form-control"-->
              <!--    :placeholder="ph_institute_title"-->
              <!--  />-->
              <!--</div>-->
              <div class="form-group">
                <textarea
                  v-bind:name="'certification['+[certification.count]+'][description]'"
                  class="form-control"
                  :placeholder="ph_desc"
                ></textarea>
              </div>
              <div class="form-group">
                <span>{{ trans('lang.date_note') }}</span>
              </div>
            </fieldset>
          </div>
        </li>
      </span>
    </ul>
  </div>
</template>

<script>
import DatePick from "vue-date-pick";
import dateTime from "./DateTimeComponent";
export default {
  components: { DatePick, dateTime },
  props: [
    "widget_title",
    "ph_job_title",
    "ph_institute_title",
    "ph_desc",
    "ph_degree_title",
    "ph_start_date",
    "ph_end_date"
  ],
  data() {
    return {
      start_date: "",
      end_date: "",
      stored_certifications: [],
      certification: {
        institute_title: "",
        start_date: this.ph_start_date,
        end_date: this.ph_end_date,
        degree_title: "",
        description: "",
        count: 0
      },
      // certification: {
      //   institute_title: this.ph_institute_title,
      //   start_date: this.ph_start_date,
      //   end_date: this.ph_end_date,
      //   degree_title: this.ph_degree_title,
      //   description: this.ph_desc,
      //   count: 0
      // },
      certifications: [],
      freelancer_certifications: [],
      count: 0
    };
  },
  methods: {
    getcertifications() {
      let self = this;
      axios
        .get(APP_URL + "/freelancer/get-freelancer-certifications")
        .then(function(response) {
          self.stored_certifications = response.data.certifications;
          // console.log(self.stored_certifications);
        });
    },
    addCertification: function() {
      var certification_list_count = jQuery(".add-certification-btn")
        .parents(".wt-tabsinfo")
        .find("ul#certification-list span.certification-inner-list li").length;
      // console.log(certification_list_count);
      if (this.$refs.certificationlistelement) {
        this.certification.count = certification_list_count + this.$refs.certificationlistelement.length;
      } else {
        this.certification.count = certification_list_count - 1;
      }
      this.certifications.push(
        Vue.util.extend({}, this.certification, this.certification.count++)
      );
    },
    removeStoredCertification: function(index) {
      //console.log(this.stored_certifications);
      //Vue.delete(this.stored_certifications, index);
      this.stored_certifications.splice(index, 1);
    }
  },
  mounted: function() {
    // var today = new Date();
    // var dd = today.getDate();
    // var mm = today.getMonth() + 1; //January is 0!
    // var yyyy = today.getFullYear();
    // this.start_date = yyyy + '-' + mm + '-' + dd;
    // this.end_date = yyyy + '-' + mm + '-' + dd;
    // this.certification.start_date = yyyy + '-' + mm + '-' + dd;
    // this.certification.end_date = yyyy + '-' + mm + '-' + dd;
    jQuery(document).on("click", ".delete-certification", function(e) {
      e.preventDefault();
      var _this = jQuery(this);
      _this.parents(".certification-inner-list-item").remove();
    });
  },
  created: function() {
    this.getcertifications();
  }
};
</script>