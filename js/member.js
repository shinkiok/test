document.addEventListener("DOMContentLoaded", () => {
    // alert("Hello");

    const btn_signup = document.querySelector("#btn-signup");
    btn_signup.addEventListener("click", () => {
        const check_box_01 = document.querySelector("#check-01");
        const check_box_02 = document.querySelector("#check-02");
        
        if(check_box_01.checked !== true) {
            alert("약관에 동의해 주셔야 가입이 됨니다.")
            return false;
        }        
        if(check_box_02.checked !== true) {
            alert("개인정보 이용에 동의해 주셔야 가입이 됨니다.")
            return false;
        }

        // self.location.href = "member_signup.php";
        // member_signup.php를 직접임력하여 접근하는 것을 방지하기위한 코드 직접접속시 $_POST=0, 정상 접속시 $POST=1
        // member_signup.php 로 직점 접속하는 것을 방지하기위해 (form 객체는 document.name<signup_form>으로 찾는다)
        const f = document.signup_form;
        f.chk.value =1;
        f.submit();
    })

	  const btn_signup_submit = document.querySelector("#signup_submit");
    btn_signup_submit.addEventListener('click', () => {
       alert(3);
		})

})
