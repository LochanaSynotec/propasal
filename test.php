
<style>

/* Reset default browser styles */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Style the navigation bar */
nav {
  background-color: #333;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
}

.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px;
  max-width: 1200px;
  margin: 0 auto;
}

.logo {
  color: #fff;
  text-decoration: none;
  font-weight: bold;
  font-size: 24px;
}

.nav-links {
  display: flex;
  list-style: none;
  justify-content: center; /* Center the links horizontally */
}

.nav-links li {
  margin-left: 15px;
}

.nav-links a {
  color: #fff;
  text-decoration: none;
}

/* Style the hamburger menu for mobile */
.burger {
  display: none;
  flex-direction: column;
  cursor: pointer;
}

.burger .line {
  width: 25px;
  height: 3px;
  background-color: #fff;
  margin-bottom: 4px;
}

/* Media query for responsive design */
@media screen and (max-width: 768px) {
  .nav-links {
    display: none;
  }

  .burger {
    display: flex;
  }

  .nav-active {
    display: flex;
    flex-direction: column;
    align-items: center;
    background-color: #333;
    position: absolute;
    top: 56px;
    right: 0;
    width: 100%;
  }

  .nav-active li {
    margin: 20px 0;
  }

  .nav-active a {
    color: #fff;
  }
}




</style>



<nav>
  <div class="navbar">
    <a class="logo" href="#">Logo</a>
    <ul class="nav-links">
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
    <div class="burger">
      <div class="line"></div>
      <div class="line"></div>
      <div class="line"></div>
    </div>
  </div>
</nav>
