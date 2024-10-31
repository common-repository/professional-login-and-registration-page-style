var url_val = /^https?:\/\/.*\/.*\.(png|gif|webp|jpeg|jpg)\??.*$/gmi;
var charecter = /^[\u0600-\u06FF\s]+$/
var bg_url = document.forms['wrl-setting']['background-url'];
var lg_url = document.forms['wrl-setting']['logo-url'];
var register_text = document.forms['wrl-setting']['register-top-text'];
var error_prnt_box = document.getElementById('wrl-error-prnt');
function validationallform() {
    if(!bg_url.value.match(url_val)&&bg_url.value!=""){
        bg_url.classList.add("invalid-inp");
        error_prnt_box.innerHTML="<span id='wrl-error'>لطفا نشانی اینترنتی صحیح برای پس زمینه قرار دهید. (فرمت های jpg,webp,jpeg,gif,png قابل قبول است)</span>";
        const delete_errors = setTimeout(delete_wrp_error, 2000);
        function delete_wrp_error(){
            bg_url.classList.remove("invalid-inp");
            error_prnt_box.innerHTML="";
        }
        return false;
    }
    if(!lg_url.value.match(url_val)&&lg_url.value!=""){
        lg_url.classList.add("invalid-inp");
        error_prnt_box.innerHTML="<span id='wrl-error'>لطفا نشانی اینترنتی صحیح برای لوگو قرار دهید. (فرمت های jpg,webp,jpeg,gif,png قابل قبول است)</span>";
        const delete_errors = setTimeout(delete_wrp_error, 2000);
        function delete_wrp_error(){
            lg_url.classList.remove("invalid-inp");
            error_prnt_box.innerHTML=""
        }
        return false;
    }
} ;