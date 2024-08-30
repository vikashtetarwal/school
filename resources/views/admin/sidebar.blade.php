<div class="main-container">
  <div class="navcontainer">
    <nav class="nav">
      <div class="nav-upper-options">
        <div class="nav-option option1">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
            class="nav-img"
            alt="dashboard">
          <h5> Dashboard</h5>
        </div>

        <div class="option2 nav-option">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
            class="nav-img"
            alt="articles">
          <h5> Articles</h5>
        </div>

        <div class="nav-option option3">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
            class="nav-img"
            alt="report">
          <h5> Report</h5>
        </div>

        <div class="nav-option option4">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
            class="nav-img"
            alt="institution">
          <h5> Institution</h5>
        </div>

        <div class="nav-option option5">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
            class="nav-img"
            alt="blog">
          <h5> Profile</h5>
        </div>

        <div class="nav-option option6">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
            class="nav-img"
            alt="settings">
          <h5> Settings</h5>
        </div>

        <div class="nav-option logout">
          <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
            class="nav-img"
            alt="logout">
          <h5>Logout</h5>
        </div>

      </div>
    </nav>
  </div>
  <div class="main">
    <div class="row p-4 shadow rounded">
           <h1 class="text-danger text-center mb-4">Admin User Profile</h1>

      <div class="col-md-4 p-5 border rounded shadow">
        <form action="">

          <img class="rounded-circle mx-auto d-block mb-4" src="{{asset('backend/images/testimonials-1.jpg')}}" width="150px">
          <input type="file" name="image" class="form-control">
          <input type="submit" class="btn btn-danger mt-4 mx-auto d-block" value="Update">
        </form>

      </div>

    
      <div class="col-md-6 ms-2 p-5 border rounded shadow">
        <form action="">

          <label for="" class="mt-2">Name</label>
          <input type="text" class="form-control" placeholder="Enter Your Name">
          <label for="" class="mt-2">Email</label>
          <input type="email" class="form-control" placeholder="Enter Your Email">
          <label for="" class="mt-2">Password</label>
          <input type="password" class="form-control" placeholder="Enter Your Password">
          <input type="submit" class="btn btn-danger mt-4 mx-auto d-block" value="Update">
        </form>

      </div>
    </div>

    <div class="row p-4 shadow rounded">
    <h1 class="text-danger text-center">Admin User Password Change</h1>
      <div class="col-md-6 mx-auto d-block p-5 border rounded shadow">

      <label for="">New Password</label>
      <input type="password" class="form-control" placeholder="Enter Your New Password">

      <label for="" class="mt-2">Confirm Password</label>
      <input type="password" class="form-control" placeholder="Enter Your Confirm Password">

      <input type="submit" class="btn btn-danger mx-auto d-block mt-4" value="Update">

      </div>
    </div>

    <!-- <div class="searchbar2">
          <input type="text"
            name=""
            id=""
            placeholder="Search">
          <div class="searchbtn">
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png"
              class="icn srchicn"
              alt="search-button">
          </div>
        </div> -->

    <!-- <div class="box-container">

          <div class="box box1">
            <div class="text">
              <h2 class="topic-heading">60.5k</h2>
              <h2 class="topic">Article Views</h2>
            </div>

            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(31).png"
              alt="Views">
          </div>

          <div class="box box2">
            <div class="text">
              <h2 class="topic-heading">150</h2>
              <h2 class="topic">Likes</h2>
            </div>

            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185030/14.png"
              alt="likes">
          </div>

          <div class="box box3">
            <div class="text">
              <h2 class="topic-heading">250+</h2>
              <h2 class="topic">Comments</h2>
            </div>

            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210184645/Untitled-design-(32).png"
              alt="comments">
          </div>

          <div class="box box4">
            <div class="text">
              <h2 class="topic-heading">70</h2>
              <h2 class="topic">Published</h2>
            </div>

            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210185029/13.png" alt="published">
          </div>
        </div> -->

    @yield('content')

    <!-- <div class="report-container">
          <div class="report-header">
            <h1 class="recent-Articles">Recent Articles</h1>
            <button class="view">View All</button>
          </div>

          <div class="report-body">
            <div class="report-topic-heading">
              <h3 class="t-op">Article</h3>
              <h3 class="t-op">Views</h3>
              <h3 class="t-op">Comments</h3>
              <h3 class="t-op">Status</h3>
            </div>

            <div class="items">
              <div class="item1">
                <h3 class="t-op-nextlvl">Article 73</h3>
                <h3 class="t-op-nextlvl">2.9k</h3>
                <h3 class="t-op-nextlvl">210</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 72</h3>
                <h3 class="t-op-nextlvl">1.5k</h3>
                <h3 class="t-op-nextlvl">360</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 71</h3>
                <h3 class="t-op-nextlvl">1.1k</h3>
                <h3 class="t-op-nextlvl">150</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 70</h3>
                <h3 class="t-op-nextlvl">1.2k</h3>
                <h3 class="t-op-nextlvl">420</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 69</h3>
                <h3 class="t-op-nextlvl">2.6k</h3>
                <h3 class="t-op-nextlvl">190</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 68</h3>
                <h3 class="t-op-nextlvl">1.9k</h3>
                <h3 class="t-op-nextlvl">390</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 67</h3>
                <h3 class="t-op-nextlvl">1.2k</h3>
                <h3 class="t-op-nextlvl">580</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 66</h3>
                <h3 class="t-op-nextlvl">3.6k</h3>
                <h3 class="t-op-nextlvl">160</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

              <div class="item1">
                <h3 class="t-op-nextlvl">Article 65</h3>
                <h3 class="t-op-nextlvl">1.3k</h3>
                <h3 class="t-op-nextlvl">220</h3>
                <h3 class="t-op-nextlvl label-tag">Published</h3>
              </div>

            </div>
          </div>
        </div> -->


  </div>
  <script src="./index.js"></script>
</div>