<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Schsdsdool Web</title>

  <link rel="stylesheet" href="{{asset('backend/css/style.css')}}">
  <link rel="stylesheet" href="{{asset('backend/js/min.js')}}">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
 
  <style>
.dropbtn {
  color: white;
  font-size: 16px;
  border-radius: 100%;
  border: none;
  background-color: #fff !important;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  /* background-color: #f9f9f9; */
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  /* padding: 12px 16px; */
  padding: 5px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
  z-index: 999999;
}

/* .dropdown:hover .dropbtn {
  background-color: #3e8e41;
} */
</style>
</head>

<body>
    
    <div class="container-fluid">

    <header>

        <div class="logosec">
        <!-- <div class="logo">GeeksForkick</div> -->
            <div class="logo"><a href="{{url('/dashboard')}}"><img src="{{asset('backend/images/logo.png')}}" alt="" srcset="" width="200px"></a></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182541/Untitled-design-(30).png"
                class="icn menuicn"
                id="menuicn"
                alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text"
                placeholder="Search">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
                    class="icn srchicn"
                    alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/8.png"
                class="icn"
                alt="">

                <div class="dropdown">
                   <button class="dropbtn"><img src="{{asset('backend/images/testimonials-1.jpg')}}"
                    class="dpicn rounded-circle"
                    alt="dp" style="margin-right: 40px;"></button>
                  <div class="dropdown-content">
                    <p>Welcome !</p>
                   <a href="#">Profile</a>
                    <a href="#">Change Password</a>
                    <a href="{{route('user-logout')}}">Logout</a>
              </div>
           </div>
            <!-- <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png"
                    class="dpicn"
                    alt="dp">
            </div> -->
        </div>

    </header>
    @include('admin.sidebar')


    </div>



    





<script>
    let menuicn = document.querySelector(".menuicn");
        let nav = document.querySelector(".navcontainer");

        menuicn.addEventListener("click", () => {
            nav.classList.toggle("navclose");
        })
</script>

</body>

</html>