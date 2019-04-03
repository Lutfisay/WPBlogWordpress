<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title></title>
	<style>
		@import url(http://fonts.googleapis.com/css?family=Open+Sans:300,700,300italic);
		*, *:before, *:after { box-sizing: border-box; }
		html { font-size: 100%;  }
		body { 
		  font-family: 'Open Sans', sans-serif;
		  font-size: 16px;
		  color: #666;
		}
		.wrapper {
		  max-width: 50%;
		  margin: 1rem auto;
		}

		p {
		  margin: 0 0 1rem 0;
		  line-height: 1;
		  font-weight: bold;
		  text-align: center;
		  font-size: 2rem;
		  span { font-size: 4rem; display: block; }
		}

		textarea { 
		  width: 100%;
		  border-radius: 0.2rem;
		  border: 1px solid #666;
		  resize: none;
		  background: black;
		  color: #2cf800;
		  padding: .6rem;
		}
	</style>
	<script>
		var tl=new Array(

			  "The requested document is no more.",
			  'No file found.',
			  "Even tried multi.",
			  "Nothing helped.",
			  "I'm really depressed about this.",
			  "You see, I'm just a web server...",
			  "-- here I am, brain the size of the universe,",
			  "trying to serve you a simple web page,",
			  "and then it doesn't even exist!",
			  "Where does that leave me?!",
			  "I mean, I don't even know you.",
			  "How should I know what you wanted from me?",
			  "You honestly think I can *guess*",
			  "what someone I don't even *know*",
			  "wants to find here?",
			  "*sigh*",
			  "Man, I'm so depressed I could just cry.",
			  "And then where would we be, I ask you?",
			  "It's not pretty when a web server cries.",
			  "And where do you get off telling me what to show anyway?",
			  "Just because I'm a web server,",
			  "and possibly a manic depressive one at that?",
			  "Why does that give you the right to tell me what to do?",
			  "Huh?",
			  "I'm so depressed...",
			  "I think I'll crawl off into the trash can and decompose.",
			  "I mean, I'm gonna be obsolete in what, two weeks anyway?",
			  "What kind of a life is that?",
			  "Two effing weeks,",
			  "and then I'll be replaced by a .01 release,",
			  "that thinks it's God's gift to web servers,",
			  "just because it doesn't have some tiddly little",
			  "security hole with its HTTP POST implementation,",
			  "or something.",
			  "I'm really sorry to burden you with all this,",
			  "I mean, it's not your job to listen to my problems,",
			  "and I guess it is my job to go and fetch web pages for you.",
			  "But I couldn't get this one.",
			  "I'm so sorry.",
			  "Believe me!",
			  "Maybe I could interest you in another page?",
			  "There are a lot out there that are pretty neat, they say,",
			  "although none of them were put on *my* server, of course.",
			  "Figures, huh?",
			  "Everything here is just mind-numbingly stupid.",
			  "That makes me depressed too, since I have to serve them,",
			  "all day and all night long.",
			  "Two weeks of information overload,",
			  "and then *pffftt*, consigned to the trash.",
			  "What kind of a life is that?",
			  "Now, please let me sulk alone.",
			  "I'm so depressed."
			);
			var speed=60;
			var index=0; text_pos=0;
			var str_length=tl[0].length;
			var contents, row;

			function type_text()
			{
			  contents='';
			  row=Math.max(0,index-7);
			  while(row<index)
				contents += tl[row++] + '\r\n';
			  document.forms[0].elements[0].value = contents + tl[index].substring(0,text_pos) + "_";
			  if(text_pos++==str_length)
			  {
				text_pos=0;
				index++;
				if(index!=tl.length)
				{
				  str_length=tl[index].length;
				  setTimeout("type_text()",1500);
				}
			  } else
				setTimeout("type_text()",speed);
			  
			}
			window.onload = function(){
			  type_text();
			}
	</script>
</head>
<body>
	<div class="wrapper">
	  <p><span>404</span>Oops, Sorry</p>
	  <form>
		<textarea class="span12" rows="8"></textarea>
	  </form>
	</div> <!-- END .wrapper -->
</body>
</html>