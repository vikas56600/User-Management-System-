
// jQuery validation for form using pluggin 

$(document).ready(function(){
$("#registeration_form").validate({
    rules:{
        first_name: "required",
        lastName:"required",
        dateofBirth:
        {
            required:true,
        },
        email:
        {
            required:true,
            email:true,

        },
        phone:
        {
            required:true,
            minlength:10,
        },
        address:
        {
            required:true,
        },
        highschool:
        {
            required:true,
        },

        yearofgraduation:
        {
            required:true,
        }
    },

    messages:
        {
            first_name:"please enter your first name",
            email:"enter your valid mail id",
            phone:{
              required  :"enter phone number",
              minlength:"enter 10 digits only",
            },

            address:{
              required  :"Please enter address",
            },

            highschool:{
            required:"please iter school info",
        },
        yearofgraduation: {
            required:"please enter the date",
        }
            
        }
});
});




