<!DOCTYPE html>
<!-- and then --><!-- makes a comment.-->
<html>
  <head>
    <title>HowToCoding.net</title>
    <link rel="stylesheet" href="./styles.css" />
    <meta charset="utf-8" />
  </head>
  <body>
    <header>
      <h1>HowToCoding.net</h1>
    </header>
    <nav id="navbar">
      <p>Navigation bar</p><br>
      <a href="#newco">HTML Beginner Course</a>
      <a href="#stlco">HTML Beginner/Intermediate Course</a>
      <a href="#interco">HTML Intermediate Course</a>
      <a href="#masterco">HTML Master Course</a><br>
      <a href="./redirect-one.html">CSS Courses</a>
      <a href="./js.html">JS Courses</a>
    </nav>
    <article>
      <p>First off- there are a <em>lot</em> of coding languages. Here is a list of just a few (lists are covered later):<p>
      <ul>
        <li>C &amp; C++</li>
        <li>HTML &amp; CSS</li>
        <li>JavaScript &amp; PHP</li>
        <li>Python</li>
        <li>Scala</li>
        <li>Fortran</li>
        <li>Assembly</li>
        <li>Basic</li>
      </ul>
      <p>So, in this site we will learn basic HTML, CSS &amp; JavaScript. These three languages can create websites. In fact, this whole <em>website</em> was coded with HTML. Sometimes, there might be an example. HTML is short for Hypertext Markup Language, &amp; CSS is Cascading Style Sheets.</p></article>
      <a href="#navbar">Go to navbar for HTML lessons</a>
      <h5>FYI: There is no course for HTML/CSS/JS kings, so I recommend showing this to your friends and/or family.</h5>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer faucibus nibh quis feugiat vulputate. Nam interdum pharetra nunc, ut hendrerit erat molestie sit amet. Proin malesuada rutrum suscipit. Cras sed augue at leo porttitor vestibulum quis in magna. Suspendisse pharetra arcu ac ante commodo tempus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Sed nisl tellus, congue eu dapibus vitae, eleifend ut odio. Curabitur commodo orci quis sem condimentum tincidunt. Suspendisse vel quam quis lorem scelerisque aliquet. Integer dapibus, purus quis condimentum imperdiet, ligula erat ultricies metus, at iaculis justo metus nec ligula. Fusce justo quam, tempor et interdum ac, sodales et odio. Sed condimentum hendrerit pellentesque. Nam gravida, velit ultricies tempor pellentesque, nibh purus eleifend enim, ac lacinia augue ex vel urna. Sed sit amet convallis ipsum. Sed congue velit eu nunc viverra, ut iaculis lorem finibus. Etiam lobortis quam sit amet dignissim mollis.

Donec quis congue arcu, et vulputate est. Aenean accumsan erat vel elit commodo tempus. Suspendisse elementum justo vestibulum commodo laoreet. In magna tellus, ultricies ac hendrerit eu, fringilla ac mauris. Nam augue nisi, mollis sit amet auctor eget, venenatis quis orci. Mauris finibus dui at velit hendrerit accumsan. Pellentesque iaculis justo et convallis interdum. Fusce.</p>
    <h2 id="newco">HTML Beginner Course</h2>
    <p>Okay, so, I don't exactly know <em>how</em> to make this understandable, but first you'll need something like CodePen or just use Notepad and save the file as index.html. So, first type &lt;html&gt; and then type a new line, press enter again (so that there are 2 blank lines after &lt;html&gt;), and, on the 2nd line <em>after</em> the &lt;html&gt;, type &lt;/html&gt;. Press the up key (the one above the key with v; the key with ^) to go to the blank line, and type &lt;body&gt;, press enter, and type &lt;/body&gt;. Go up one line, press enter, and in the blank line, type &lt;h1&gt;. After that, on the same line, type "This is a heading." Now open up Files &amp; search the app for index.html. When you find it, open it. Your local search engine should have opened up. If you are using something online, you do <em>not</em> need to open Files. In the output, it should say "This is a heading." This means your code has worked. If it says something like <q>404 Page not found</q>, then you have not saved the file correctly. If this happens, save the file as <em>index.html</em>. This is important because it should be saved as index.html. Now go back to your input, and, after the text you recently typed, type &lt;/h1&gt;. Make a blank line directly after the h1 line, and type &lt;p&gt;This is a paragraph.&lt;/p&gt;. Refresh the page, and look at the new text. It should say, in smaller text,"This is a paragraph." This also means the code worked. Now back to the input. The line that you see that shows where text editing happens should be at the end of line 4. Make a blank line. On this line, type &lt;a href="https://www.google.com"&gt;Google&lt;/a&gt;. Back to the output. Refresh. It should now also say "Google" in blue &amp; underlined text. Click the <u>underlined</u> text <em>in the output.</em> You should now be at the Google browser page. Click the back button on your screen. You should now be at index.html. Save your project and close the tab. <strong>This is the end of the HTML Beginner Course.</strong></p>
    <h2 id="stlco">HTML Beginner/Intermediate Course</h2>
    <p>Open the file called index.html. Go to the end of line 5(the line with &lt;a&gt;) and press enter. In the blank line, type &lt;button&gt;Button&lt;/button&gt;. Open index.html as a site, and see what has changed. There should be a button that says <q>Button</q>. This means it has worked. Now on a new line between the button and /body closing tag, type &lt;p&gt;e = mc&lt;sup&gt;2&lt;/sup&gt;&lt;/p&gt;. It should look like this:</p>
    <div class="example">
      <h1>This is a heading.</h1>
      <p>This is a paragraph.</p>
      <a href="http://www.google.com" class="examlink">Google</a>
      <button>Button</button>
      <p>e = mc<sup>2</sup></p>
    </div>
    <p>Now we will do something a little harder. Images are done with &lt;img src="image link" alt="text that displays when the image doesn't load"/&gt;, but those are not covered. Instead just right-click on an image that you want and tap <q>Copy image</q> on the list that will have appeared. Then go back to your input and type <abbr>Ctrl</abbr>+C. This will have brought the image onto your site. Anyways, now we will cover attributes. First, you'll learn the width &amp; height attributes. These work <em>only</em> in the &lt;img&gt; tag. They need to be set to px values, and if it is set to something like 300px, the height will auto-adjust to make the image smaller/bigger. Next, we will talk about the src and alt attributes. These are also for the &lt;img&gt; tag. The src attribute contains the link to the image/GIF. The alt attribute contains text that displays if the image does not exist/if the image does not load. As of <abbr>HTML5</abbr>, the alt attribute is mandatory for an image. If the image is purely decorative, the alt should be empty. But if the image <em>explains</em> something, it should be filled with info about the image. The href attribute is for the &lt;a&gt; tag. The href attribute contains info about the link, and the &lt;a&gt; tag is not truly a hyperlink without it. The href contains the link to the page it is supposed to open. But you may have noticed that it changes the tab to the link in the href. This can easily be fixed by simply adding target="_blank". What this does is open the link in a new tab. You will see that this is very useful. Now close the tab, and do whatever you do after you finish a coding lesson. <strong>This is the end of the HTML Beginner/Intermediate Course.</strong></p>
    <h2 id="interco">HTML Intermediate Course</h2>
      <p>Reopen index.html. Now we will move on to dead links. A dead link is made the same way as a hyperlink (&lt;a&gt;), except for the fact that in a dead link the href is either blank or has a # in it. Now the other things we will cover in this course are the <code>style</code>, <code>script</code>, and <code>link</code> tags. The <code>link</code> tag is used for external <abbr title="Cascading Style Sheets">CSS</abbr>, <code>style</code> contains internal <abbr title="Cascading Style Sheets">CSS</abbr>, and <code>script</code> is used to show/refer to JavaScript code. The <code>accesskey</code> attribute is used for giving a hyperlink focus. The value of the attribute will consist of a single character, and in the page, when that key is clicked, it will give the hyperlink focus. The <code>meta</code> tag stores - well, metadata. It has multiple attributes, but the most common one is <code>charset</code>. It defines the character encoding specified for the HTML document. <strong>This is the end of the HTML Intermediate Course.</strong></p>
      <h2 id="masterco">HTML Master Course</h2>
      <p>Open your html file. Today we will turn it into a website. Delete everything in your <code>&lt;body&gt;</code> tag and type in a set of <code>&lt;header&gt;</code> tags. Inside the header tags, type up <code>&lt;h1&gt;___&lt;/h1&gt;</code>. Then replace the underscores ___ with whatever title you want. Next, after the header, type in <code>&lt;nav&gt;&lt;/nav&gt;</code>. In the nav tags, type in <code>&lt;a href=""&gt;</code>. This is as much as I'm giving you. Customize the page however you want, and maybe add MORE pages! <a href="#navbar">Back to top</a> <strong>This is the end of the HTML courses.</strong></p>
    <footer>

    </footer>
  </body>
</html>
