<?php include 'inc_header.php';?>

<main class="container">

    <h1 class="text-center mt-5">회원약관 및 개인정보 취급방침 동의</h1>

    <h3 class=" mt-5">1. 회원약관 동의</h3>
    <textarea name="" rows="8" id="" class="form-control px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus quam aliquid officia eveniet id iure quo illo ea veritatis? Fugiat iure vero soluta dolorum, inventore voluptatibus quas suscipit cupiditate quae aliquid impedit earum sed laboriosam praesentium cum totam consectetur doloribus eaque neque deleniti est sequi. Reprehenderit quidem praesentium mollitia tempora esse tempore rem cumque illo, beatae blanditiis similique exercitationem labore sequi commodi non tenetur! Error at quod quam quia sint reprehenderit alias quidem totam mollitia voluptas molestiae animi, corporis eos ipsam aliquam omnis harum! Illo labore commodi tempora fugit maxime quidem culpa molestiae dolores at rerum veritatis, quis ipsum dolor praesentium in, inventore nemo iste. Vero accusantium earum, nam dolorem, dignissimos dolores officia quas similique totam dolorum  neque facere voluptatem accusantium nihil repellendus laboriosam repellat et! Consequatur voluptatibus eligendi praesentium inventore consectetur, explicabo est omnis qui facilis iure sit dignissimos ullam laudantium magnam. Minus corporis provident minima labore ipsam sequi quis nisi repudiandae, porro ut nam molestias id saepe veritatis harum mollitia sed quod inventore non tenetur atque praesentium. Nam aliquid quidem possimus recusandae dolorem at nesciunt illo minima minus dolor fugit alias omnis, explicabo ratione? Rem omnis ullam aliquam exercitaatum corrupti esse accusamus velit sapiente laboriosam blanditiis? Esse odit dolorem, quas sapiente sit earum odio atque quibusdam!</textarea>
    <div class="form-check  my-2">
        <input type="checkbox" class="form-check-input " value="1" id="check-01">
        <label for="check-01" class="form-check-label">
            위 약관에 동의합니다.
        </label>        
    </div>

    <h3 class="mt-5">2. 개인정보 이용 동의</h3>
    <textarea name="" rows="6" id="" class="form-control px-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus quam aliquid officia eveniet id iure quo illo ea veritatis? Fugiat iure vero soluta dolorum, inventore voluptatibus quas suscipit cupiditate quae aliquid impedit earum sed laboriosam praesentium cum totam consectetur doloribus eaque neque deleniti est sequi. Reprehenderit quidem litia sed quod inventore non tenetur atque praesentium. Nam aliquid quidem possimus recusandae dolorem at nesciunt illo minima minus dolor fugit alias omnis, explicabo ratione? Rem omnis ullam aliquam exercitaatum corrupti esse accusamus velit sapiente laboriosam blanditiis? Esse odit dolorem, quas sapiente sit earum odio atque quibusdam!</textarea>
    <div class="form-check  my-2">
        <input type="checkbox" class="form-check-input"  value="1" id="check-02">
        <label for="check-02" class="form-check-label">
            위 개인정보 공개에 동의합니다.
        </label>        
    </div>

    <div class="d-flex mt-4 justify-content-center gap-3">
        <button class="btn btn-primary w-25" id="btn-signup">회원가입</button>
        <button class="btn btn-secondary w-25" id="btn-cancel">가입취소</button>
    </div>

    <!-- member_signup.php 로 직점 접속하는 것을 방지하기위해 (form 객체는 document.name<signup_form>으로 찾는다)-->
    <form method="post" name="signup_form" action="member_signup.php" style="display:none" >
        <input type="hidden" name="chk" value="0">
    </form>
    <!-- member_signup.php 로 직점 접속하는 것을 방지하기위해 (form 객체는 document.name<signup_form>으로 찾는다)-->

</main>

<?php include 'inc_footer.php'; ?>
