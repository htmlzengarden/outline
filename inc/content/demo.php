<!-- include content -->
<div id="content">
	<div class="page">
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

		<p>
		The <a href="#">a element</a> example<br />
		The <abbr>abbr element</abbr> and <abbr title="Title text">abbr element with title</abbr> examples<br />
		The <b>b element</b> example<br />
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

		<div>
			<audio controls="controls"></audio>
		</div>
		<div>
			<audio></audio>
		</div>

		<h3>img</h3>

		<img src="http://maquettes.garden.projects.clever-age.net/img/100/000/000" alt="" />
		<a href="#"><img src="http://maquettes.garden.projects.clever-age.net/img/100/000/000" alt="" /></a>

		<h3>svg</h3>

		<svg width="100px" height="100px">
		    <circle cx="100" cy="100" r="100" fill="#000" />
		</svg>

		<h3>video</h3>

		<div>
			<video controls="controls"></video>
		</div>
		<div>
			<video></video>
		</div>

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
		    <fieldset>
		        <legend><span>Inputs as descendents of labels (form legend). This doubles up as a long legend that can test word wrapping.</span></legend>
		        <p><label><span class="label">Text input</span><input type="text" value="default value that goes on and on without stopping or punctuation" /></label></p>
		        <p><label><span class="label">Email input</span><input type="email" /></label></p>
		        <p><label><span class="label">Search input</span><input type="search" /></label></p>
		        <p><label><span class="label">Tel input</span><input type="tel" /></label></p>
		        <p><label><span class="label">URL input</span><input type="url" placeholder="http://" /></label></p>
		        <p><label><span class="label">Password input</span><input type="password" value="password" /></label></p>
		        <p class="file"    ><label><span class="label">File input</span><input type="file" /></label></p>
		        <p class="radio"   ><label><span class="label">Radio input</span> <input type="radio" name="rad" class="radio" /></label></p>
		        <p class="checkbox"><label><span class="label">Checkbox input</span> <input type="checkbox" class="checkbox" /></label></p>
		        <p class="radio"   ><label><input type="radio" name="rad" class="radio" /> <span class="label">Radio input</span></label></p>
		        <p class="checkbox"><label><input type="checkbox" class="checkbox" /> <span class="label">Checkbox input</span></label></p>
		        <p class="select"  ><label><span class="label">Select field</span><select><option>Option 01</option><option>Option 02</option></select></label></p>
		        <p class="textarea"><label><span class="label">Textarea</span><textarea cols="30" rows="5" >Textarea text</textarea></label></p>
		    </fieldset>

		    <fieldset>
		        <legend><span>Inputs as siblings of labels</span></legend>
		        <p><label class="label" for="ic">Color input</label><input type="color" id="ic" value="#000000" /></p>
		        <p><label class="label" for="in">Number input</label><input type="number" id="in" min="0" max="10" value="5" /></p>
		        <p><label class="label" for="ir">Range input</label><input type="range" id="ir" value="10" /></p>
		        <p><label class="label" for="idd">Date input</label><input type="date" id="idd" value="1970-01-01" /></p>
		        <p><label class="label" for="idm">Month input</label><input type="month" id="idm" value="1970-01" /></p>
		        <p><label class="label" for="idw">Week input</label><input type="week" id="idw" value="1970-W01" /></p>
		        <p><label class="label" for="idt">Datetime input</label><input type="datetime" id="idt" value="1970-01-01T00:00:00Z" /></p>
		        <p><label class="label" for="idtl">Datetime-local input</label><input type="datetime-local" id="idtl" value="1970-01-01T00:00" /></p>

		        <p class="radio"   ><label class="label" for="irb">Radio input</label> <input type="radio" id="irb" name="rad" class="radio" /></p>
		        <p class="checkbox"><label class="label" for="icb">Checkbox input</label> <input type="checkbox" id="icb" class="checkbox" /></p>
		        <p class="radio"   ><input type="radio" id="irb2" name="rad" class="radio" /> <label for="irb2" class="label">Radio input</label></p>
		        <p class="checkbox"><input type="checkbox" id="icb2" class="checkbox" /> <label for="icb2" class="label">Checkbox input</label></p>
		
		        <p class="select"  ><label class="label" for="s">Select field</label><select id="s"><option>Option 01</option><option>Option 02</option></select></p>
		        <p class="textarea"><label class="label" for="t">Textarea</label><textarea id="t" cols="30" rows="5" >Textarea text</textarea></p>
		    </fieldset>

		    <fieldset>
		        <legend><span>Clickable inputs and buttons</span></legend>
		        <p><input type="image" src="http://maquettes.garden.projects.clever-age.net/img/140x27/000/000" alt="Image (input)" /></p>
		        <p><input type="reset" value="Reset (input)" /></p>
		        <p><input type="button" value="Button (input)" /></p>
		        <p><input type="submit" value="Submit (input)" /></p>
		        <p><input type="submit" value="Disabled (input)" disabled="disabled" /></p>


		        <p><button type="reset">Reset (button)</button></p>
		        <p><button type="button">Button (button)</button></p>
		        <p><button type="submit">Submit (button)</button></p>
		        <p><button type="submit" disabled="disabled">Disabled (button)</button></p>
		    </fieldset>
		
		    <fieldset>
		        <legend><span>box-sizing tests</span></legend>

		        <div class="p"><input type="reset" value="Reset (input)" class="reset" /></div>
		        <div class="p"><input type="button" value="Button (input)" class="button" /></div>
		        <div class="p"><input type="submit" value="Submit (input)" class="submit" /></div>

		        <div class="p"><button type="reset" class="reset">Reset (button)</button></div>
		        <div class="p"><button type="button" class="button">Button (button)</button></div>
		        <div class="p"><button type="submit" class="submit">Submit (button)</button></div>

		        

		        <div class="p radio"   ><input type="radio" class="radio" /></div>
		        <div class="p checkbox"><input type="checkbox" class="checkbox" /></div>
		        
		        <div class="p"><input type="image" src="http://maquettes.garden.projects.clever-age.net/img/220x27/000/000" alt="Image (input)" /></div>
		        
		        <div class="p">
		        	<input type="text" value="text" /><!--
		         --><select style="margin-left: 20px;" name="select" id="select" class="input-select"><option>Option 01</option><option>Option 02</option></select><!--
		         --><span class="help">help</span>
		        </div>
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


		        <div class="p textarea"><textarea cols="30" rows="4">Textarea text</textarea></div>
		    </fieldset>
		</form>

		<h1 id="i18n">i18n</h1>

		<p>Outline uses a custom i18n library to add locales support in layouts. You can use the <code>&lt;?php echo _t('my localizable string') ?&gt;</code> in your templates to localize a string.</p>
		<p>The localizations are located in the i18n.json file. You must NOT fill all the strings. The <code>_t()</code> function will return the given string with braces (<code>[]</code>) if the string isn't found in the json file.</p>
		<p>To change the locale, simply append the <code>lang</code> GET parameter to your URL</p>

		<h3>Examples</h3>

		<p>Change the locale : <a href="?page=demo&amp;lang=fr#i18n">fr</a> | <a href="?page=demo&amp;lang=it#i18n">it</a> | <a href="?page=demo&amp;lang=en#i18n">en</a></p>
		<ul>
			<li><?php echo _t('Hello') ?></li>
			<li><?php echo _t('Login') ?></li>
			<li><?php echo _t('Sign in') ?></li>
			<li><?php echo _t('Not available for all locales') ?></li>
			<li><?php echo _t('Not available at all') ?></li>
		</ul>
	</div>
</div>

