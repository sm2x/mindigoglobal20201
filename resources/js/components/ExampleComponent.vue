<template>
    <div class="profile">
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <div id="general-info" class="section general-info">
                    <div class="info ">
                    
                            <h6 class="">General Information</h6>

                            
                        
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="row">
                                    <div class="col-xl-2 col-lg-12 col-md-4">
                                        <div class="upload mt-4 pr-md-4">
                                            <input type="file" id="input-file-max-fs" class="dropify" data-default-file="" data-max-file-size="2M" />
                                            <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                        </div>
                                    </div>
                                    <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                        <div class="form">
                                            <div class="row">

                                                <div class="col-sm-6">
                                                    <div class="form-group">
                                                        <label for="fullName">Full Name</label>
                                                        <input type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" v-model="name" readonly>
                                                    </div>
                                                </div>

                                                <div class="col-sm-6">
                                                <label for="">Gender</label>
                                                    <div class="form-group ">
                                                    
                                                        <div class="custom-control custom-radio custom-control">
                                                            <input type="radio" id="customRadioInline1" name="gender" value="male" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                                                        </div>
                                                        <div class="custom-control custom-radio custom-control">
                                                            <input type="radio" id="customRadioInline2" name="gender" value="female" class="custom-control-input">
                                                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label for="profession">Bio</label>
                                                <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" v-model="bio" >
                                            </div>
                                           
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>

                         <div class="row">
                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Country</label>
                                            <select v-model="nationality" class="form-control " id="country">
                                                <option>All Countries</option>
                                                <option selected>United States</option>
                                                <option value="India">India</option>
                                                <option value="Japan">Japan</option>
                                                <option value="China">China</option>
                                                <option value="Brazil">Brazil</option>
                                                <option value="Norway">Norway</option>
                                                <option value="Canada">Canada</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Address</label>
                                            <input type="text" class="form-control mb-4" id="address" placeholder="Address" value="New York" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="location">Location</label>
                                            <input type="text" class="form-control mb-4" id="location" placeholder="Location">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone</label>
                                            <input type="text" class="form-control mb-4" id="phone" placeholder="Write your phone number here" value="+1 (530) 555-12121">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Next of Kin Name:</label>
                                            <input type="text" class="form-control mb-4" id="email" placeholder="Next of kin name" value="">
                                        </div>
                                    </div>                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Next of Kin Address</label>
                                            <input type="text" class="form-control mb-4" id="website1" placeholder="Next of Kin address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Next of Kin Relationship</label>
                                            <input type="text" class="form-control mb-4" id="website1" placeholder="Next of kin relationship">
                                        </div>
                                    </div>
                                    
                                </div>
                                <button @click="updateProfile()" class="btn btn-primary float-right">update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
         

            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <form id="contact" class="section contact">
                    <div class="info">
                        <h5 class="">Bank Details</h5>
                        <div class="row">
                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="country">Bank Name</label>
                                            <select class="form-control" id="country">
                                                <option>All Countries</option>
                                                <option selected>First Bank Nigeria</option>
                                                <option>HSBC</option>
                                                
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="address">Account Name</label>
                                            <input type="text" class="form-control mb-4" id="address" placeholder="Supply Account Name" value="" >
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Account Number</label>
                                            <input type="text" class="form-control mb-4" id="website1" placeholder="Supply Account Number">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="website1">Sort Code:</label>
                                            <input type="text" class="form-control mb-4" id="website1" placeholder="Sort code of bank">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-primary float-right">update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

           <!-- 
            <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                <form id="social" class="section social">
                    <div class="info">
                        <h5 class="">Social</h5>
                        <div class="row">

                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group social-linkedin mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="linkedin"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="linkedin Username" aria-label="Username" aria-describedby="linkedin" value="jimmy_turner">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group social-tweet mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="tweet"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Twitter Username" aria-label="Username" aria-describedby="tweet" value="@jTurner">
                                        </div>
                                    </div>                                                        
                                </div>
                            </div>

                            <div class="col-md-11 mx-auto">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group social-fb mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="fb"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Facebook Username" aria-label="Username" aria-describedby="fb" value="Jimmy Turner">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="input-group social-github mb-3">
                                            <div class="input-group-prepend mr-3">
                                                <span class="input-group-text" id="github"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Instagram Username" aria-label="Username" aria-describedby="github" value="@TurnerJimmy">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-11 mx-auto">
                                <button class="btn btn-primary float-right">update</button>
                            </div>
                            
                        </div>
                        
                    </div>
                </form>
            </div> -->

    </div>
</template>

<script>


    export default {
      

        data() {
            return {

                loading: false,
                msg: 'Loading...',

                name: '',
                bio: '',   
                gender: '',
                nationality: '',
                // state: '',
                // lga: '',
                // marital_status: '',
                // home_address: '',
                // phone1: '',
                // nok_fullname: '',
                // nok_gender: '',
                // nok_phone: '',
                // nok_relationship: '',
                // nok_address: '',
                // recipient_code: '',
                // Auth_Code: '',
                // bank_code: '',
                // account_name: '',
                // account_number: '',
                // account_type: '',

                user_profile: ''

            }
        },

          props: ['user_id'],

        methods: {

            getUserInfo(){

     

                axios.post('/getUserInfo',{
                        user_id: this.user_id
                })
               .then((response)=>(

                        this.name = response.data.name,
                        this.bio = response.data.bio,
                        this.gender = response.data.gender,
                        this.nationality = response.data.nationality,

                    // this.user_profile = response.data,
                    console.log(response)
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });
            },

           
           updateProfile(){


                axios.post('/updateProfile',{
                        name: this.name,
                        bio: this.bio,
                        gender: this.gender,
                        nationality: this.nationality,
                        // state
                        // lga
                        // marital_status
                        // home_address
                        // phone1
                        // nok_fullname
                        // nok_gender
                        // nok_phone
                        // nok_relationship
                        // nok_address
                        // recipient_code
                        // Auth_Code
                        // bank_code
                        // account_name
                        // account_number
                        // account_type
                })
               .then((response)=>(

                    this.states = response.data,
                    console.log(this.states)
                    //  this.results = response.data
                )).catch(function (error) {
                        console.log(error);
                    });
            },


        },
        
        mounted() {
            this.getUserInfo()
            console.log('Component mounted.')
        },

        
        
    }
</script>
