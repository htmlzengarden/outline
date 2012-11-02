<!-- include content -->
<h1>Heading 1</h1>
<h2>Heading 2</h2>
<h3>Heading 3</h3>
<h4>Heading 4</h4>
<h5>Heading 5</h5>
<h6>Heading 6</h6>

<div class="clearfix">
	<div class="colleft">
		<p>col left</p>
	</div>
	<div class="colright">
		<p>col right</p>
	</div>
</div>

<div class="clearfix">
	<section>
		<h1>Heading 1 (in section)</h1>
		<h2>Heading 2 (in section)</h2>
		<h3>Heading 3 (in section)</h3>
		<h4>Heading 4 (in section)</h4>
		<h5>Heading 5 (in section)</h5>
		<h6>Heading 6 (in section)</h6>
	</section>
	
	<article>
		<h1>Heading 1 (in article)</h1>
		<h2>Heading 2 (in article)</h2>
		<h3>Heading 3 (in article)</h3>
		<h4>Heading 4 (in article)</h4>
		<h5>Heading 5 (in article)</h5>
		<h6>Heading 6 (in article)</h6>
	</article>
</div>

<header>
    <hgroup>
        <h1>Heading 1 (in hgroup)</h1>
        <h2>Heading 2 (in hgroup)</h2>
    </hgroup>
    <nav>
        <ul>
            <li><a href="#">navigation item #1</a></li>
            <li><a href="#">navigation item #2</a></li>
            <li><a href="#">navigation item #3</a></li>
        </ul>
    </nav>
</header>

<h1>Text-level semantics</h1>

<p hidden="hidden">This should be hidden in all browsers, apart from IE6</p>

<p class="large">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. <span>Cum sociis natoque penatibus et m.</span></p>
<p class="small">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m.</p>

<address class="large"><span>Address: somewhere, world</span></address>

<p>The <a href="#">a element</a> example</p>
<p>The <abbr>abbr element</abbr> and <abbr title="Title text">abbr element with title</abbr> examples</p>
<p>The <b>b element</b> example<br />
The <cite>cite element</cite> example<br />
The <code>code element</code> example<br />
The <del>del element</del> example<br />
The <dfn>dfn element</dfn> and <dfn title="Title text">dfn element with title</dfn> examples<br />
The <em>em element</em> example<br />
The <i>i element</i> example<br />
<!-- The img element <img src="http://maquettes.garden.projects.clever-age.net/img/10/000/000" alt="" style="display: inline;" /> example<br /> -->
The <ins>ins element</ins> example<br />
The <kbd>kbd element</kbd> example<br />
The <mark>mark element</mark> example<br />
The <q>q element <q>inside</q> a q element</q> example<br />
The <s>s element</s> example<br />
The <samp>samp element</samp> example<br />
The <small>small element</small> example<br />
The <span>span element</span> example<br />
The <strong>strong element</strong> example<br />
The <sub>sub element</sub> example<br />
The <sup>sup element</sup> example<br />
The <var>var element</var> example<br />
The <u>u element</u> example
</p>

<h1>Embedded content</h1>

<h3>audio</h3>

<audio controls="controls" style="height: 2.858em;"></audio>

<h3>img</h3>

<img src="http://maquettes.garden.projects.clever-age.net/img/100/000/000" alt="" />
<a href="#"><img src="http://maquettes.garden.projects.clever-age.net/img/100/000/000" alt="" /></a>

<h3>svg</h3>

<svg width="100px" height="100px" viewBox="0 0 100 100">
    <circle cx="100" cy="100" r="100" fill="#000" />
</svg>

<h3>video</h3>

<video controls="controls" style="height: 11.432em;"></video>

<h1>Interactive content</h1>

<h3>details / summary</h3>
<details>
    <summary>More info</summary>
    <p>Additional information</p>
    <ul>
        <li>Point 1</li>
        <li>Point 2</li>
    </ul>
</details>

<h1>Grouping content</h1>

<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et m.</p>

<h3>pre</h3>

<pre>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et me.</pre>

<pre><code>&lt;html>
	&lt;head>
		&lt;title>&lt;/title>
	&lt;/head>
	&lt;body>
		&lt;div class="main">&lt;div>
	&lt;/body>
&lt;/html></code></pre>

<h3>blockquote</h3>

<blockquote>
    <p>Some sort of famous witty quote marked up with a &lt;blockquote> and a child &lt;p> element.</p>
</blockquote>

<blockquote>Even better philosophical quote marked up with just a &lt;blockquote> element.</blockquote>

<h3>ordered list</h3>

<ol>
    <li>list item 1</li>
    <li>list item 1
        <ol>
            <li>list item 2</li>
            <li>list item 2
                <ol>
                    <li>list item 3</li>
                    <li>list item 3</li>
                </ol>
            </li>
            <li>list item 2</li>
            <li>list item 2</li>
        </ol>
    </li>
    <li>list item 1</li>
    <li>list item 1</li>
</ol>

<h3>unordered list</h3>

<ul>
    <li>list item 1</li>
    <li>list item 1
        <ul>
            <li>list item 2</li>
            <li>list item 2
                <ul>
                    <li>list item 3</li>
                    <li>list item 3</li>
                </ul>
            </li>
            <li>list item 2</li>
            <li>list item 2</li>
        </ul>
    </li>
    <li>list item 1</li>
    <li>list item 1</li>
</ul>

<h3>description list</h3>

<dl>
    <dt>Description name</dt>
    <dd>Description value</dd>
    <dt>Description name</dt>
    <dd>Description value</dd>
    <dd>Description value</dd>
    <dt>Description name</dt>
    <dt>Description name</dt>
    <dd>Description value</dd>
</dl>

<h3>figure</h3>

<figure>
    <img src="http://maquettes.garden.projects.clever-age.net/img/400x200/000/000" alt="" />
    <figcaption>Figcaption content</figcaption>
</figure>

<h1>Tabular data</h1>

<table>
    <caption>Jimi Hendrix - albums</caption>
    <thead>
        <tr>
            <th>Album</th>
            <th>Year</th>
            <th>Price</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>Album</th>
            <th>Year</th>
            <th>Price</th>
        </tr>
    </tfoot>
    <tbody>
        <tr>
            <td>Are You Experienced</td>
            <td>1967</td>
            <td>$10.00</td>
        </tr>
        <tr>
            <td>Axis: Bold as Love</td>
            <td>1967</td>
            <td>$12.00</td>
        </tr>
        <tr>
            <td>Electric Ladyland</td>
            <td>1968</td>
            <td>$10.00</td>
        </tr>
        <tr>
            <td>Band of Gypsys</td>
            <td>1970</td>
            <td>$12.00</td>
        </tr>
    </tbody>
</table>

<h1>Forms</h1>

<form>
    <fieldset class="nth-child-1">
        <legend><span>Inputs as descendents of labels (form legend). This doubles up as a long legend that can test word wrapping.</span></legend>
        <p><label for="input-1">Text input <input type="text" id="input-1" value="default value that goes on and on without stopping or punctuation" /></label></p>
        <p><label for="input-2">Email input <input type="email" id="input-2" /></label></p>
        <p><label for="input-3">Search input <input type="search" id="input-3" /></label></p>
        <p><label for="input-4">Tel input <input type="tel" id="input-4" /></label></p>
        <p><label for="input-5">URL input <input type="url" id="input-5" placeholder="http://" /></label></p>
        <p><label for="input-6">Password input <input type="password" id="input-6" value="password" /></label></p>
        <p><label for="input-7">File input <input type="file" id="input-7" /></label></p>

        <p><label for="input-8">Radio input <input type="radio" id="input-8" name="rad" class="radio" /></label></p>
        <p><label for="input-9">Checkbox input <input type="checkbox" id="input-9" class="checkbox" /></label></p>
        <p><label for="input-10"><input type="radio" id="input-10" name="rad" class="radio" /> Radio input</label></p>
        <p><label for="input-11"><input type="checkbox" id="input-11" class="checkbox" /> Checkbox input</label></p>

        <p><label for="select-1">Select field <select id="select-1"><option>Option 01</option><option>Option 02</option></select></label></p>
        <p class="last-child" style="min-height: 8.571em;"><label for="textarea-1">Textarea <textarea cols="30" rows="5" id="textarea-1">Textarea text</textarea></label></p>
    </fieldset>

    <fieldset class="nth-child-2">
        <legend><span>Inputs as siblings of labels</span></legend>
        <p><label for="ic">Color input</label> <input type="color" id="ic" value="#000000" /></p>
        <p><label for="in">Number input</label> <input type="number" id="in" min="0" max="10" value="5" /></p>
        <p><label for="ir">Range input</label> <input type="range" id="ir" value="10" /></p>
        <p><label for="idd">Date input</label> <input type="date" id="idd" value="1970-01-01" /></p>
        <p><label for="idm">Month input</label> <input type="month" id="idm" value="1970-01" /></p>
        <p><label for="idw">Week input</label> <input type="week" id="idw" value="1970-W01" /></p>
        <p><label for="idt">Datetime input</label> <input type="datetime" id="idt" value="1970-01-01T00:00:00Z" /></p>
        <p><label for="idtl">Datetime-local input</label> <input type="datetime-local" id="idtl" value="1970-01-01T00:00" /></p>

        <p><label for="irb">Radio input</label> <input type="radio" id="irb" name="rad" class="radio" /></p>
        <p><label for="icb">Checkbox input</label> <input type="checkbox" id="icb" class="checkbox" /></p>
        <p><input type="radio" id="irb2" name="rad" class="radio" /> <label for="irb2">Radio input</label></p>
        <p><input type="checkbox" id="icb2" class="checkbox" /> <label for="icb2">Checkbox input</label></p>

        <p><label for="s">Select field</label> <select id="s"><option>Option 01</option><option>Option 02</option></select></p>
        <p class="last-child" style="min-height: 8.571em;"><label for="t">Textarea</label> <textarea id="t" cols="30" rows="5" >Textarea text</textarea></p>
    </fieldset>

    <fieldset>
        <legend><span>Clickable inputs and buttons</span></legend>
        <p><input type="image" src="http://maquettes.garden.projects.clever-age.net/img/90x6/000/000" alt="Image (input)" /></p>
        <p><input type="reset" value="Reset (input)" /></p>
        <p><input type="button" value="Button (input)" /></p>
        <p><input type="submit" value="Submit (input)" /></p>
        <p><input type="submit" value="Disabled (input)" disabled="disabled" /></p>


        <p><button type="reset">Reset (button)</button></p>
        <p><button type="button">Button (button)</button></p>
        <p><button type="submit">Submit (button)</button></p>
        <p><button type="submit" disabled="disabled">Disabled (button)</button></p>
    </fieldset>

    <fieldset id="boxsize" class="last-child">
        <legend><span>box-sizing tests</span></legend>
        
        <div class="p"><input type="reset" value="Reset (input)" class="reset" /></div>
        <div class="p"><input type="button" value="Button (input)" class="button" /></div>
        <div class="p"><input type="submit" value="Submit (input)" class="submit" /></div>

        <div class="p"><button type="reset" class="reset">Reset (button)</button></div>
        <div class="p"><button type="button" class="button">Button (button)</button></div>
        <div class="p"><button type="submit" class="submit">Submit (button)</button></div>
        
        <div class="p"><select><option>Option 01</option><option>Option 02</option></select></div>
        
        <div class="p"><input type="radio" class="radio" /></div>
        <div class="p"><input type="checkbox" class="checkbox" /></div>
        
        <div class="p"><input type="image" src="http://maquettes.garden.projects.clever-age.net/img/90x6/000/000" alt="Image (input)" /></div>
        
        <div class="p"><input type="text" value="text" /><select style="margin-left: 20px;" name="select" id="select" class="input-select"><option>Option 01</option><option>Option 02</option></select></div>
        <div class="p"><input type="email" value="email" /></div>
        <div class="p"><input type="search" value="search" /></div>
        <div class="p"><input type="url" value="http://example.com" /></div>
        <div class="p"><input type="password" value="password" /></div>

        <div class="p"><input type="color" value="#000000" /></div>
        <div class="p"><input type="number" value="5" /></div>
        <div class="p"><input type="range" value="10" /></div>
        <div class="p"><input type="date" value="1970-01-01" /></div>
        <div class="p"><input type="month" value="1970-01" /></div>
        <div class="p"><input type="week" value="1970-W01" /></div>
        <div class="p"><input type="datetime" value="1970-01-01T00:00:00Z" /></div>
        <div class="p"><input type="datetime-local" value="1970-01-01T00:00" /></div>


        <div class="p last-child" style="min-height: 8.571em;"><textarea cols="30" rows="4">Textarea text</textarea></div>
    </fieldset>
</form>