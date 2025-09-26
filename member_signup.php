<?php 

// echo "<h1>HELLO</h1>";
print_r($_POST);

// member_signup.php를 직접임력하여 접근하는 것을 방지하기위한 코드 직접접속시 $_POST=0, 정상 접속시 $POST=1
// POST['chk'] 값으로 접근 루트 판별한다...
if( !isset($_POST['chk'])  || $_POST['chk'] != 1  ) {
    // die ("<script> alert('접속 사이트를 이용하여 접근하세요..'); history.go(-1);</script>");
    die ("<script> 
            alert('정상적인 접속 사이트를 이용하여 접근하세요..'); 
            self.location.href='./index.php';   </script>");
}

include 'inc_header.php';
?>


<main class= " mt-5">

<div class="container" >

    <h2>회원가입</h2>


    <form class="d-flex  flex-column  border p-3" >

        <div class="mb-3 d-flex align-items-end gap-3">
            <div>
                <label for="member_id" class="form-label">User ID</label>
                <input type="text" class="form-control" id="member_id" aria-describedby="emailHelp">
            </div>
            <button  class="btn btn-secondary fs-6"  >중복체크</button>
        </div>        

        <div class="mb-3 d-flex align-items-end gap-3">
            <div>
                <label for="member_email" class="form-label">User Email</label>
                <input type="email" class="form-control" id="member_email" aria-describedby="emailHelp">
            </div>
            <button  class="btn btn-secondary" >중복체크</button>
        </div>
        
        <div class="mb-3">
            <label for="member_password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="member_password1">
        </div>
        <div class="mb-3">
            <label for="member_password2" class="form-label">Password 2</label>
            <input type="password" class="form-control" id="member_password2">
        </div>
       
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
       
        <button type="btn" id="signup_submit" class="btn btn-primary">Submit</button>
       
    </form>


</div>

</main>
<?php   include 'inc_footer.php';  ?>


