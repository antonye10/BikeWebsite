<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title>jInvertScroll - A lightweight jQuery horizontal Parallax scrolling plugin</title>
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="css/jInvertScroll.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>
	<div class="container">
        <div class="header">
            <div class="logo">
                <a href="index.html">
                    <img src="images/jInvertScroll.png" alt="jInvertScroll" />
                </a>
            </div>
			
			<div class="credits">
				<a href="../index.html">
					<img src="images/pixxelfactory.png" alt="Pixxelfactory" />
				</a>
			</div>
        </div>
		
		<div class="license">
			<h2>License:</h2>
			<p>
				The MIT License (MIT)<br/>
				<br/>
				Copyright (c) 2013 pixxelfactory<br/>
				<br/>
				Permission is hereby granted, free of charge, to any person obtaining a copy
				of this software and associated documentation files (the "Software"), to deal
				in the Software without restriction, including without limitation the rights
				to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
				copies of the Software, and to permit persons to whom the Software is
				furnished to do so, subject to the following conditions:<br/>
				<br/>
				The above copyright notice and this permission notice shall be included in
				all copies or substantial portions of the Software.<br/>
				<br/>
				THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
				IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
				FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
				AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
				LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
				OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
				THE SOFTWARE.
			</p>
		</div>
    </div>
	
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/jquery.jInvertScroll.js"></script>
	<script type="text/javascript">
	(function($) {
		$.jInvertScroll(['.scroll']);
	}(jQuery));
	</script>
	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-376733-5']);
		_gaq.push(['_trackPageview']);
	  
		(function() {
		  var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		  ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		  var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	  </script>
</body>
</html>

<!-- Localized -->