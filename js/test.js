document.addEventListener("DOMContentLoaded", () => {
    // alert("Hello Test");
    

    const btn1 = document.querySelector(".btn-zipcode");
    const btn2 = document.querySelector("#btn-zipcode");
    btn1.addEventListener("click", () => {

        console.log("Clicked ZIP");
        new daum.Postcode({
            oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드
            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('postcode').value = data.zonecode;
            document.getElementById('roadAddress').value = data.roadAddress;
            document.getElementById('jibunAddress').value = data.jibunAddress;


            const xx = data.zonecode;
            const yy = data.roadAddress;
            const zz = data.jibunAddress;
            console.log(xx);
            console.log(yy);
            console.log(zz);
            }
        }).open();        
    })
    btn2.addEventListener("click", () => {

        console.log("Clicked BUTTON");
        new daum.Postcode({
            oncomplete: function(data) {
            // 팝업에서 검색결과 항목을 클릭했을때 실행할 코드
            // 우편번호와 주소 정보를 해당 필드에 넣는다.
            document.getElementById('postcode').value = data.zonecode;
            document.getElementById('roadAddress').value = data.roadAddress;
            document.getElementById('jibunAddress').value = data.jibunAddress;


            const xx = data.zonecode;
            const yy = data.roadAddress;
            const zz = data.jibunAddress;
            console.log(xx);
            console.log(yy);
            console.log(zz);
            }
        }).open();        
    })




})
