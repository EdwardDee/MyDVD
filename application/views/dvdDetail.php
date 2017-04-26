<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<style type="text/css">
@import url("css.css");
</style>
<title>DVD Rental</title>

</head>

<div id="wrapper">
	<div id="header">
		<div class="logo"><a href="index"><img src="image/logo_v2.png"></a></div>

		<div id="headerLinkWrapper">
            <div class="headerLink" id="newReleasePullDown">
				<ul>
                    <li><a href="newRelease">New Releases</a></li>
				</ul>
			</div>
			<div class="headerLink" id="pulldownChoose">
				<ul>
				<li><a href="#">Genre</a>
				  <ul>
                      <li><a href="genre">Action and Adventure</a></li>
                      <li><a href="genre">Anime and Animation</a></li>
                      <li><a href="genre">Children and Family</a></li>
                      <li><a href="genre">Classics</a></li>
                      <li><a href="genre">Comedy</a></li>
                      <li><a href="genre">Documentary</a></li>
                      <li><a href="genre">Drama</a></li>
                      <li><a href="genre">Horror</a></li>
                      <li><a href="genre">Music and Musicals</a></li>
                      <li><a href="genre">Romance</a></li>
                      <li><a href="genre">Sci-Fi and Fantasy</a></li>
                      <li><a href="genre">Thrillers</a></li>
				  </ul>
				</li>
				</ul>
			</div>

			<div class="headerLink" id="howItWorksPullDown">
				<ul>
                    <li><a href="howItWorks">How It Works</a></li>
				</ul>
			</div>
			<div class="headerLink" id="signUpPullDown">
				<ul>
				<li><a href="signUp">Sign Up</a></li>
				</ul>
			</div>
			<div class="headerLink" id="cartPullDown">
				<ul>
				<li><a href="cart.php">Cart</a></li>
				</ul>
			</div>
            <div class="searchingCont">
                <form action="searching.php" method="post" id="search">
                    
                    <div class="searchingInput"><input id="searchingInput" name="searchingInput" autocomplete="off" class="searchingInput" tabindex="19" type="text"></div>
                    <div class="searchingBtn"><input type="submit" id="searching" class="searching" value=""/></div>
                </form>
            </div>
            <div class="headerLink" id="signInPullDown">
				<ul>
                    <li><a href="signIn">Sign In</a></li>
				</ul>
			</div>
		</div>
	</div>
    
    
	<div id="container">

        <div class="dvdInside">
            <div class="imgInside"><img src="image/big1.jpg" height="398" width="280" ></div>
            <div class="dvdDetail">
                <div class="bookInsideTitle">Spotlight</div>
                <div class="bookIntroduce">The true story of how the Boston Globe uncovered the massive scandal of child molestation and cover-up within the local Catholic Archdiocese, shaking the entire Catholic Church to its core.</div>
                <div class="publisherInside">Runtime: 128 mins</div>
                <div class="publisherInside">Genre: Crime, Drama, History</div>
                <div class="publisherInside">Format: DVD, Blu-ray</div>
                <div class="publisherInside">Director: Tom McCarthy</div>
                <div class="publisherInside">Stars: Mark Ruffalo, Michael Keaton, Rachel McAdams</div>
            </div>
            <div class="addToCart">
                <div class="price">Price: $4.99</div>
                <form action="addToCart.php" method="POST" id="addToCartForm">
                    <div class="Quantity">
                        <select name="QuantityAddToCart">
                            <option value="1">DVD</option>
                            <option value="2">Blu-ray</option>
                        </select>
                    </div>
                    
                    <input type="hidden" name="isbn" value="<?=$row['ISBN']?>">
                        <input type="submit" id="addToCartBtn" class="addToCartBtn" value="Add to Cart"/>
                        </form>
            </div>
        </div>

     </div>

	<div class="footer">© DVD Rental 2017</div>
</div>
</html>