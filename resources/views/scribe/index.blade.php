<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>Laravel API Documentation</title>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.style.css") }}" media="screen">
    <link rel="stylesheet" href="{{ asset("/vendor/scribe/css/theme-default.print.css") }}" media="print">

    <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.10/lodash.min.js"></script>

    <link rel="stylesheet"
          href="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/styles/obsidian.min.css">
    <script src="https://unpkg.com/@highlightjs/cdn-assets@11.6.0/highlight.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jets/0.14.1/jets.min.js"></script>

    <style id="language-style">
        /* starts out as display none and is replaced with js later  */
                    body .content .bash-example code { display: none; }
                    body .content .javascript-example code { display: none; }
            </style>

    <script>
        var tryItOutBaseUrl = "http://localhost";
        var useCsrf = Boolean();
        var csrfUrl = "/sanctum/csrf-cookie";
    </script>
    <script src="{{ asset("/vendor/scribe/js/tryitout-5.9.0.js") }}"></script>

    <script src="{{ asset("/vendor/scribe/js/theme-default-5.9.0.js") }}"></script>

</head>

<body data-languages="[&quot;bash&quot;,&quot;javascript&quot;]">

<a href="#" id="nav-button">
    <span>
        MENU
        <img src="{{ asset("/vendor/scribe/images/navbar.png") }}" alt="navbar-image"/>
    </span>
</a>
<div class="tocify-wrapper">
    
            <div class="lang-selector">
                                            <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                            <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                    </div>
    
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>

    <div id="toc">
                    <ul id="tocify-header-introduction" class="tocify-header">
                <li class="tocify-item level-1" data-unique="introduction">
                    <a href="#introduction">Introduction</a>
                </li>
                            </ul>
                    <ul id="tocify-header-authenticating-requests" class="tocify-header">
                <li class="tocify-item level-1" data-unique="authenticating-requests">
                    <a href="#authenticating-requests">Authenticating requests</a>
                </li>
                            </ul>
                    <ul id="tocify-header-endpoints" class="tocify-header">
                <li class="tocify-item level-1" data-unique="endpoints">
                    <a href="#endpoints">Endpoints</a>
                </li>
                                    <ul id="tocify-subheader-endpoints" class="tocify-subheader">
                                                    <li class="tocify-item level-2" data-unique="endpoints-GETapi-user">
                                <a href="#endpoints-GETapi-user">GET api/user</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-register">
                                <a href="#endpoints-POSTapi-register">POST api/register</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-login">
                                <a href="#endpoints-POSTapi-login">POST api/login</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-games">
                                <a href="#endpoints-GETapi-games">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-games">
                                <a href="#endpoints-POSTapi-games">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-games--id-">
                                <a href="#endpoints-GETapi-games--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-games--id-">
                                <a href="#endpoints-PUTapi-games--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-games--id-">
                                <a href="#endpoints-DELETEapi-games--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-publishers">
                                <a href="#endpoints-GETapi-publishers">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-publishers">
                                <a href="#endpoints-POSTapi-publishers">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-publishers--id-">
                                <a href="#endpoints-GETapi-publishers--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-publishers--id-">
                                <a href="#endpoints-PUTapi-publishers--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-publishers--id-">
                                <a href="#endpoints-DELETEapi-publishers--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-collectibles">
                                <a href="#endpoints-GETapi-collectibles">Display a listing of the resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-collectibles">
                                <a href="#endpoints-POSTapi-collectibles">Store a newly created resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-collectibles--id-">
                                <a href="#endpoints-GETapi-collectibles--id-">Display the specified resource.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-PUTapi-collectibles--id-">
                                <a href="#endpoints-PUTapi-collectibles--id-">Update the specified resource in storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-collectibles--id-">
                                <a href="#endpoints-DELETEapi-collectibles--id-">Remove the specified resource from storage.</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-games--gameId--collectibles">
                                <a href="#endpoints-GETapi-games--gameId--collectibles">Get all collectibles for a specific game by gameId</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-logout">
                                <a href="#endpoints-POSTapi-logout">POST api/logout</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-me">
                                <a href="#endpoints-GETapi-me">Return authenticated user's own profile data</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-favorites">
                                <a href="#endpoints-GETapi-favorites">GET api/favorites</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-POSTapi-favorites--gameId-">
                                <a href="#endpoints-POSTapi-favorites--gameId-">POST api/favorites/{gameId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-favorites--gameId-">
                                <a href="#endpoints-GETapi-favorites--gameId-">GET api/favorites/{gameId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-DELETEapi-favorites--gameId-">
                                <a href="#endpoints-DELETEapi-favorites--gameId-">DELETE api/favorites/{gameId}</a>
                            </li>
                                                                                <li class="tocify-item level-2" data-unique="endpoints-GETapi-admin-favorites--userId-">
                                <a href="#endpoints-GETapi-admin-favorites--userId-">GET api/admin/favorites/{userId}</a>
                            </li>
                                                                        </ul>
                            </ul>
            </div>

    <ul class="toc-footer" id="toc-footer">
                    <li style="padding-bottom: 5px;"><a href="{{ route("scribe.postman") }}">View Postman collection</a></li>
                            <li style="padding-bottom: 5px;"><a href="{{ route("scribe.openapi") }}">View OpenAPI spec</a></li>
                <li><a href="http://github.com/knuckleswtf/scribe">Documentation powered by Scribe ✍</a></li>
    </ul>

    <ul class="toc-footer" id="last-updated">
        <li>Last updated: April 15, 2026</li>
    </ul>
</div>

<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <h1 id="introduction">Introduction</h1>
<aside>
    <strong>Base URL</strong>: <code>http://localhost</code>
</aside>
<pre><code>This documentation aims to provide all the information you need to work with our API.

&lt;aside&gt;As you scroll, you'll see code examples for working with the API in different programming languages in the dark area to the right (or as part of the content on mobile).
You can switch the language used with the tabs at the top right (or from the nav menu at the top left on mobile).&lt;/aside&gt;</code></pre>

        <h1 id="authenticating-requests">Authenticating requests</h1>
<p>This API is not authenticated.</p>

        <h1 id="endpoints">Endpoints</h1>

    

                                <h2 id="endpoints-GETapi-user">GET api/user</h2>

<p>
</p>



<span id="example-requests-GETapi-user">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/user" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/user"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-user">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-user"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-user" data-method="GET"
      data-path="api/user"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-user"
                    onclick="tryItOut('GETapi-user');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-user"
                    onclick="cancelTryOut('GETapi-user');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-user"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/user</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-user"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-register">POST api/register</h2>

<p>
</p>



<span id="example-requests-POSTapi-register">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/register" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"email\": \"zbailey@example.net\",
    \"password\": \"architecto\",
    \"password_confirmation\": \"architecto\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/register"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "email": "zbailey@example.net",
    "password": "architecto",
    "password_confirmation": "architecto"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-register">
</span>
<span id="execution-results-POSTapi-register" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-register"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-register"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-register" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-register">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-register" data-method="POST"
      data-path="api/register"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-register', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-register"
                    onclick="tryItOut('POSTapi-register');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-register"
                    onclick="cancelTryOut('POSTapi-register');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-register"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/register</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-register"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-register"
               value="b"
               data-component="body">
    <br>
<p>Must be at least 3 characters. Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-register"
               value="zbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>zbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password_confirmation</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password_confirmation"                data-endpoint="POSTapi-register"
               value="architecto"
               data-component="body">
    <br>
<p>Example: <code>architecto</code></p>
        </div>
        </form>

                    <h2 id="endpoints-POSTapi-login">POST api/login</h2>

<p>
</p>



<span id="example-requests-POSTapi-login">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/login" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"email\": \"gbailey@example.net\",
    \"password\": \"+-0pBNvYgxwmi\\/#iw\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/login"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "gbailey@example.net",
    "password": "+-0pBNvYgxwmi\/#iw"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-login">
</span>
<span id="execution-results-POSTapi-login" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-login"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-login"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-login">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-login" data-method="POST"
      data-path="api/login"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-login', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-login"
                    onclick="tryItOut('POSTapi-login');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-login"
                    onclick="cancelTryOut('POSTapi-login');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-login"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/login</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-login"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>email</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="email"                data-endpoint="POSTapi-login"
               value="gbailey@example.net"
               data-component="body">
    <br>
<p>Must be a valid email address. Must not be greater than 255 characters. Example: <code>gbailey@example.net</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>password</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="password"                data-endpoint="POSTapi-login"
               value="+-0pBNvYgxwmi/#iw"
               data-component="body">
    <br>
<p>Must be at least 8 characters. Example: <code>+-0pBNvYgxwmi/#iw</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-games">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-games">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/games" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-games">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Assassin&#039;s Creed Valhalla&quot;,
        &quot;release_year&quot;: 2020,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS5&quot;,
            &quot;Xbox Series X&quot;
        ],
        &quot;cover&quot;: &quot;https://www.winkingworks.com/wp-content/uploads/2021/06/assassin-cover.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Apex Legends&quot;,
        &quot;release_year&quot;: 2019,
        &quot;genre&quot;: &quot;Battle Royale&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;,
            &quot;Switch&quot;
        ],
        &quot;cover&quot;: &quot;https://images.ctfassets.net/w5r1fvmogo3f/5fJySxdWKgRuLfRtdn81O4/4d7c1bf0af3075638a36926bfc1b32ad/3b4965a458fb41958c17ebf4d79475f0.webp&quot;,
        &quot;freetogame_url&quot;: &quot;https://www.freetogame.com/apex-legends&quot;
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Counter-Strike 2&quot;,
        &quot;release_year&quot;: 2023,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://cs-quality.ru/uploads/posts/2025-12/767057c8ed_tr7dojqhmisb5obgj8e0qg.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Arc Raiders&quot;,
        &quot;release_year&quot;: 2025,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 4,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS5&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/11551/26e8bc61-7b6b-453a-9f19-071c56e91164.avif&quot;,
        &quot;freetogame_url&quot;: null
    },
    {
        &quot;id&quot;: 5,
        &quot;name&quot;: &quot;Assassin&#039;s Creed II&quot;,
        &quot;release_year&quot;: 2009,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS3&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://static.chaseyoursport.com/blogImage/880x600/1756029394142-99267.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 6,
        &quot;name&quot;: &quot;Far Cry 3&quot;,
        &quot;release_year&quot;: 2012,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS3&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/11497/d3414c30-aff3-48c2-90ed-bd0217bc3eeb.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 7,
        &quot;name&quot;: &quot;Watch Dogs&quot;,
        &quot;release_year&quot;: 2014,
        &quot;genre&quot;: &quot;Action&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/2591/2941.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 8,
        &quot;name&quot;: &quot;The Division&quot;,
        &quot;release_year&quot;: 2016,
        &quot;genre&quot;: &quot;Acction RPG&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/5224/10862.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 9,
        &quot;name&quot;: &quot;Assassin&#039;s Creed Origins&quot;,
        &quot;release_year&quot;: 2017,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://www.konzolvilag.hu/gallery/playstation4/assassins-creed-origins/playstation4-playstation4-5_thumb674.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 10,
        &quot;name&quot;: &quot;Far Cry 5&quot;,
        &quot;release_year&quot;: 2018,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://portforward.com/far-cry-5/far-cry-5-header-small.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 11,
        &quot;name&quot;: &quot;The Division 2&quot;,
        &quot;release_year&quot;: 2019,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://jdigitales.cl/cdn/shop/files/8ec54b35b5b955ec22cf9cd44fbaf8d9f568198626240424.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 13,
        &quot;name&quot;: &quot;Riders Republic&quot;,
        &quot;release_year&quot;: 2021,
        &quot;genre&quot;: &quot;MMS&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS5&quot;,
            &quot;Xbox Series X&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/4744/10065.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 14,
        &quot;name&quot;: &quot;Avatar: Frontiers of Pandora&quot;,
        &quot;release_year&quot;: 2023,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 1,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS5&quot;,
            &quot;Xbox Series X&quot;
        ],
        &quot;cover&quot;: &quot;https://emofly.b-cdn.net/hbd_exvhac6ayb3ZKT/width:1080/plain/https://storage.googleapis.com/takeapp/media/cm69gwngn000h03jye823axtz.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 15,
        &quot;name&quot;: &quot;Battlefield 3&quot;,
        &quot;release_year&quot;: 2011,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS3&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://img.goodfon.com/wallpaper/big/6/7e/battlefield-3-voyna-soldat-4933.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 16,
        &quot;name&quot;: &quot;Mass Effect 3&quot;,
        &quot;release_year&quot;: 2012,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS3&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://cdn.dlcompare.com/game_tetiere/upload/gameimage/file/mass-effect-3-file-4799547e.jpeg.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 17,
        &quot;name&quot;: &quot;Battlefield 4&quot;,
        &quot;release_year&quot;: 2013,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://gamebro.hu/img/83671/1293/1293.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 18,
        &quot;name&quot;: &quot;Dragon Age: Inquisition&quot;,
        &quot;release_year&quot;: 2014,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://api.egyptgamestore.com/storage/2076/548.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 19,
        &quot;name&quot;: &quot;Star Wars Battlefront&quot;,
        &quot;release_year&quot;: 2015,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://cdn.dlcompare.com/game_tetiere/upload/gameimage/file/7184.jpeg.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 20,
        &quot;name&quot;: &quot;Titanfall 2&quot;,
        &quot;release_year&quot;: 2016,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://substackcdn.com/image/fetch/$s_!83xS!,f_auto,q_auto:good,fl_progressive:steep/https%3A%2F%2Fsubstack-post-media.s3.amazonaws.com%2Fpublic%2Fimages%2Fc9e974e2-e4f3-49b1-945d-23a2f0e83478.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 21,
        &quot;name&quot;: &quot;Star Wars Battlefront II&quot;,
        &quot;release_year&quot;: 2017,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://cdn.dlcompare.com/others_jpg/upload/news/image/star-wars-battlefront-ii-breaks-90e62ad1-image-90e62ab9.jpg.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 23,
        &quot;name&quot;: &quot;Star Wars Jedi: Fallen Order&quot;,
        &quot;release_year&quot;: 2019,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS4&quot;,
            &quot;Xbox One&quot;
        ],
        &quot;cover&quot;: &quot;https://gamesync.us/wp-content/smush-avif/2019/11/Fallen-Order-Box-Art-1080x675.jpeg.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 24,
        &quot;name&quot;: &quot;Star Wars Jedi: Survivor&quot;,
        &quot;release_year&quot;: 2023,
        &quot;genre&quot;: &quot;Action RPG&quot;,
        &quot;publisher_id&quot;: 2,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS5&quot;,
            &quot;Xbox Series X&quot;
        ],
        &quot;cover&quot;: &quot;https://cdn.prod.website-files.com/693a625465e075bb1a78eda6/693a625465e075bb1a78fafa_banner.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 25,
        &quot;name&quot;: &quot;Half-Life 2&quot;,
        &quot;release_year&quot;: 2004,
        &quot;genre&quot;: &quot;FPS&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://media.overclock3d.net/2024/11/half-life-2-art-crop.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 26,
        &quot;name&quot;: &quot;Portal&quot;,
        &quot;release_year&quot;: 2007,
        &quot;genre&quot;: &quot;Puzzle&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://gfn.ru/media/images/art_im_A0eOnaF.2e16d0ba.fill-308x308.format-webp.webpquality-50.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 27,
        &quot;name&quot;: &quot;Left 4 Dead&quot;,
        &quot;release_year&quot;: 2008,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://www.fixgamingchannel.com/wp-content/uploads/2025/07/Left-4-Dead-1.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 28,
        &quot;name&quot;: &quot;Left 4 Dead 2&quot;,
        &quot;release_year&quot;: 2009,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://cdn.minestrator.com/eggs/content/left4dead2.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 29,
        &quot;name&quot;: &quot;Portal 2&quot;,
        &quot;release_year&quot;: 2011,
        &quot;genre&quot;: &quot;Puzzle&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;,
            &quot;PS3&quot;,
            &quot;Xbox 360&quot;
        ],
        &quot;cover&quot;: &quot;https://gfn.ru/media/images/art_im_5a1Irqw.2e16d0ba.fill-308x308.format-webp.webpquality-50.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 30,
        &quot;name&quot;: &quot;Dota 2&quot;,
        &quot;release_year&quot;: 2013,
        &quot;genre&quot;: &quot;MOBA&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://loadbalancer.gocore.gg/strapi/assets/Dota_2_Banner_3eb70915ea.webp&quot;,
        &quot;freetogame_url&quot;: &quot;https://www.freetogame.com/dota-2&quot;
    },
    {
        &quot;id&quot;: 31,
        &quot;name&quot;: &quot;Counter-Strike: Global Offensive&quot;,
        &quot;release_year&quot;: 2012,
        &quot;genre&quot;: &quot;Shooter&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://news.exitlag.com/wp-content/uploads/2026/03/csgo-steam-1024x576.webp&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 32,
        &quot;name&quot;: &quot;Half-Life: Alyx&quot;,
        &quot;release_year&quot;: 2020,
        &quot;genre&quot;: &quot;VR FPS&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://isthmiangaming.com/wp-content/smush-avif/2024/12/HalfLifeAlyxCover.jpg.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 33,
        &quot;name&quot;: &quot;The Lab&quot;,
        &quot;release_year&quot;: 2016,
        &quot;genre&quot;: &quot;VR Demo&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://isthmiangaming.com/wp-content/smush-avif/2024/12/TheLabCover.jpg.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    },
    {
        &quot;id&quot;: 34,
        &quot;name&quot;: &quot;Artifact&quot;,
        &quot;release_year&quot;: 2018,
        &quot;genre&quot;: &quot;Card&quot;,
        &quot;publisher_id&quot;: 3,
        &quot;platforms&quot;: [
            &quot;PC&quot;
        ],
        &quot;cover&quot;: &quot;https://8upload.com/image/26c2df2c43520d52/artifact.avif&quot;,
        &quot;freetogame_url&quot;: &quot;&quot;
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-games" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-games"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-games"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-games" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-games">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-games" data-method="GET"
      data-path="api/games"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-games', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-games"
                    onclick="tryItOut('GETapi-games');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-games"
                    onclick="cancelTryOut('GETapi-games');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-games"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/games</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-games"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-games"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-games">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-games">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/games" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"release_year\": 22,
    \"genre\": \"g\",
    \"publisher_id\": 16,
    \"platforms\": [
        \"ngzmiyvdljnikhwa\"
    ],
    \"cover\": \"y\",
    \"freetogame_url\": \"http:\\/\\/www.romaguera.net\\/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "release_year": 22,
    "genre": "g",
    "publisher_id": 16,
    "platforms": [
        "ngzmiyvdljnikhwa"
    ],
    "cover": "y",
    "freetogame_url": "http:\/\/www.romaguera.net\/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure"
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-games">
</span>
<span id="execution-results-POSTapi-games" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-games"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-games"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-games" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-games">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-games" data-method="POST"
      data-path="api/games"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-games', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-games"
                    onclick="tryItOut('POSTapi-games');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-games"
                    onclick="cancelTryOut('POSTapi-games');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-games"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/games</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-games"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-games"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-games"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>release_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="release_year"                data-endpoint="POSTapi-games"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1970. Must not be greater than 2030. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genre"                data-endpoint="POSTapi-games"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>publisher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="publisher_id"                data-endpoint="POSTapi-games"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the publishers table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>platforms</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="platforms[0]"                data-endpoint="POSTapi-games"
               data-component="body">
        <input type="text" style="display: none"
               name="platforms[1]"                data-endpoint="POSTapi-games"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cover"                data-endpoint="POSTapi-games"
               value="y"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>freetogame_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="freetogame_url"                data-endpoint="POSTapi-games"
               value="http://www.romaguera.net/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters. Example: <code>http://www.romaguera.net/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-games--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-games--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/games/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-games--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Assassin&#039;s Creed Valhalla&quot;,
    &quot;release_year&quot;: 2020,
    &quot;genre&quot;: &quot;Action RPG&quot;,
    &quot;publisher_id&quot;: 1,
    &quot;platforms&quot;: [
        &quot;PC&quot;,
        &quot;PS5&quot;,
        &quot;Xbox Series X&quot;
    ],
    &quot;cover&quot;: &quot;https://www.winkingworks.com/wp-content/uploads/2021/06/assassin-cover.webp&quot;,
    &quot;freetogame_url&quot;: &quot;&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-games--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-games--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-games--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-games--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-games--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-games--id-" data-method="GET"
      data-path="api/games/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-games--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-games--id-"
                    onclick="tryItOut('GETapi-games--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-games--id-"
                    onclick="cancelTryOut('GETapi-games--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-games--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/games/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-games--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the game. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-games--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-games--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/games/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"release_year\": 22,
    \"genre\": \"g\",
    \"publisher_id\": 16,
    \"platforms\": [
        \"ngzmiyvdljnikhwa\"
    ],
    \"cover\": \"y\",
    \"freetogame_url\": \"http:\\/\\/www.romaguera.net\\/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure\"
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "release_year": 22,
    "genre": "g",
    "publisher_id": 16,
    "platforms": [
        "ngzmiyvdljnikhwa"
    ],
    "cover": "y",
    "freetogame_url": "http:\/\/www.romaguera.net\/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure"
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-games--id-">
</span>
<span id="execution-results-PUTapi-games--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-games--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-games--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-games--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-games--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-games--id-" data-method="PUT"
      data-path="api/games/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-games--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-games--id-"
                    onclick="tryItOut('PUTapi-games--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-games--id-"
                    onclick="cancelTryOut('PUTapi-games--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-games--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/games/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/games/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-games--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the game. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-games--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>release_year</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="release_year"                data-endpoint="PUTapi-games--id-"
               value="22"
               data-component="body">
    <br>
<p>Must be at least 1970. Must not be greater than 2030. Example: <code>22</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>genre</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="genre"                data-endpoint="PUTapi-games--id-"
               value="g"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>g</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>publisher_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="publisher_id"                data-endpoint="PUTapi-games--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the publishers table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>platforms</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="platforms[0]"                data-endpoint="PUTapi-games--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="platforms[1]"                data-endpoint="PUTapi-games--id-"
               data-component="body">
    <br>
<p>Must not be greater than 20 characters.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>cover</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="cover"                data-endpoint="PUTapi-games--id-"
               value="y"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters. Example: <code>y</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>freetogame_url</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="freetogame_url"                data-endpoint="PUTapi-games--id-"
               value="http://www.romaguera.net/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters. Example: <code>http://www.romaguera.net/aut-adipisci-quidem-nostrum-qui-commodi-incidunt-iure</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-games--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-games--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/games/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-games--id-">
</span>
<span id="execution-results-DELETEapi-games--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-games--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-games--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-games--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-games--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-games--id-" data-method="DELETE"
      data-path="api/games/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-games--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-games--id-"
                    onclick="tryItOut('DELETEapi-games--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-games--id-"
                    onclick="cancelTryOut('DELETEapi-games--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-games--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/games/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-games--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-games--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the game. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-publishers">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-publishers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/publishers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/publishers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-publishers">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;name&quot;: &quot;Ubisoft&quot;,
        &quot;headquarters&quot;: &quot;Montreuil, France&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 2,
        &quot;name&quot;: &quot;Electronic Arts&quot;,
        &quot;headquarters&quot;: &quot;Redwood City, California, USA&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 3,
        &quot;name&quot;: &quot;Valve Corporation&quot;,
        &quot;headquarters&quot;: &quot;Bellevue, Washington, USA&quot;,
        &quot;is_active&quot;: 1
    },
    {
        &quot;id&quot;: 4,
        &quot;name&quot;: &quot;Embark Studios&quot;,
        &quot;headquarters&quot;: &quot;Stockholm, Sweden&quot;,
        &quot;is_active&quot;: 1
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-publishers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-publishers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-publishers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-publishers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-publishers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-publishers" data-method="GET"
      data-path="api/publishers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-publishers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-publishers"
                    onclick="tryItOut('GETapi-publishers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-publishers"
                    onclick="cancelTryOut('GETapi-publishers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-publishers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/publishers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-publishers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-publishers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-publishers">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-publishers">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/publishers" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"headquarters\": \"n\",
    \"is_active\": false
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/publishers"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "headquarters": "n",
    "is_active": false
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-publishers">
</span>
<span id="execution-results-POSTapi-publishers" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-publishers"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-publishers"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-publishers" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-publishers">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-publishers" data-method="POST"
      data-path="api/publishers"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-publishers', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-publishers"
                    onclick="tryItOut('POSTapi-publishers');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-publishers"
                    onclick="cancelTryOut('POSTapi-publishers');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-publishers"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/publishers</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-publishers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-publishers"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="POSTapi-publishers"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>headquarters</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="headquarters"                data-endpoint="POSTapi-publishers"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="POSTapi-publishers" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="POSTapi-publishers"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="POSTapi-publishers" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="POSTapi-publishers"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>false</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-publishers--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-publishers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/publishers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/publishers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-publishers--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;name&quot;: &quot;Ubisoft&quot;,
    &quot;headquarters&quot;: &quot;Montreuil, France&quot;,
    &quot;is_active&quot;: 1
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-publishers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-publishers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-publishers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-publishers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-publishers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-publishers--id-" data-method="GET"
      data-path="api/publishers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-publishers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-publishers--id-"
                    onclick="tryItOut('GETapi-publishers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-publishers--id-"
                    onclick="cancelTryOut('GETapi-publishers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-publishers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/publishers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-publishers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the publisher. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-publishers--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-publishers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/publishers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"name\": \"b\",
    \"headquarters\": \"n\",
    \"is_active\": true
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/publishers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "b",
    "headquarters": "n",
    "is_active": true
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-publishers--id-">
</span>
<span id="execution-results-PUTapi-publishers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-publishers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-publishers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-publishers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-publishers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-publishers--id-" data-method="PUT"
      data-path="api/publishers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-publishers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-publishers--id-"
                    onclick="tryItOut('PUTapi-publishers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-publishers--id-"
                    onclick="cancelTryOut('PUTapi-publishers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-publishers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/publishers/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/publishers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-publishers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the publisher. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>name</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="name"                data-endpoint="PUTapi-publishers--id-"
               value="b"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>b</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>headquarters</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="headquarters"                data-endpoint="PUTapi-publishers--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 255 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>is_active</code></b>&nbsp;&nbsp;
<small>boolean</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <label data-endpoint="PUTapi-publishers--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="true"
                   data-endpoint="PUTapi-publishers--id-"
                   data-component="body"             >
            <code>true</code>
        </label>
        <label data-endpoint="PUTapi-publishers--id-" style="display: none">
            <input type="radio" name="is_active"
                   value="false"
                   data-endpoint="PUTapi-publishers--id-"
                   data-component="body"             >
            <code>false</code>
        </label>
    <br>
<p>Example: <code>true</code></p>
        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-publishers--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-publishers--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/publishers/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/publishers/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-publishers--id-">
</span>
<span id="execution-results-DELETEapi-publishers--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-publishers--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-publishers--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-publishers--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-publishers--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-publishers--id-" data-method="DELETE"
      data-path="api/publishers/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-publishers--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-publishers--id-"
                    onclick="tryItOut('DELETEapi-publishers--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-publishers--id-"
                    onclick="cancelTryOut('DELETEapi-publishers--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-publishers--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/publishers/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-publishers--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-publishers--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the publisher. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-collectibles">Display a listing of the resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-collectibles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/collectibles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collectibles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-collectibles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Weapon Skin&quot;,
        &quot;description&quot;: &quot;Legendary Viking Axe skin&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com//image/1c9a2746c8033e3b/Varins_Axe_Screenshot_2020-11-25_20-57-09.avif&quot;,
            &quot;https://8upload.com/preview/e477244465625c9f/forging_the_ac_valhalla_axe_t.avif&quot;
        ],
        &quot;map_location&quot;: [
            1234567.123456,
            9876543.987654
        ]
    },
    {
        &quot;id&quot;: 2,
        &quot;game_id&quot;: 2,
        &quot;type&quot;: &quot;Character Skin&quot;,
        &quot;description&quot;: &quot;Exclusive Wraith skin&quot;,
        &quot;images&quot;: [
            &quot;https://rarest.org/wp-content/uploads/2022/06/9.-High-Class.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 3,
        &quot;game_id&quot;: 3,
        &quot;type&quot;: &quot;Sticker&quot;,
        &quot;description&quot;: &quot;Holographic CS2 sticker&quot;,
        &quot;images&quot;: [
            &quot;https://files.bo3.gg/uploads/image/75067/image/webp-0f5f66747b4621a173d0b3e874b71a65.webp&quot;,
            &quot;https://community.skin.club/wp-content/uploads/2024/11/Liquid-Fire-Holo_LR.webp&quot;
        ],
        &quot;map_location&quot;: [
            123.456,
            78.91
        ]
    },
    {
        &quot;id&quot;: 4,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Excalibur greatsword&quot;,
        &quot;images&quot;: [
            &quot;https://exputer.com/wp-content/uploads/2022/08/Excalibur-AC-Valhalla.webp&quot;,
            &quot;https://www.pley-again.com/wp-content/uploads/2025/10/Assassins-Creed%C2%AE-Valhalla_20251016002335.webp&quot;,
            &quot;https://www.nextplayer.it/wp-content/uploads/2023/07/F0PTIEJagAEIITx-800x445.webp&quot;
        ],
        &quot;map_location&quot;: [
            52.3555,
            -1.1743
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Armor Set&quot;,
        &quot;description&quot;: &quot;Thor Armor Set&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/3c5b61aacf404eb0/ACV_-_Thors_Set_concept_1.avif&quot;,
            &quot;https://8upload.com/preview/8361331271a0ff97/thors-set.avif&quot;
        ],
        &quot;map_location&quot;: [
            60.472,
            8.4689
        ]
    },
    {
        &quot;id&quot;: 6,
        &quot;game_id&quot;: 2,
        &quot;type&quot;: &quot;Heirloom&quot;,
        &quot;description&quot;: &quot;Wraith Kunai Heirloom Voidwalker set&quot;,
        &quot;images&quot;: [
            &quot;https://www.picclickimg.com/yOMAAeSwF2dppO62/Apex-Legends-Account-Legendary-Skins-1-universal.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 7,
        &quot;game_id&quot;: 2,
        &quot;type&quot;: &quot;Legendary Skin&quot;,
        &quot;description&quot;: &quot;Bloodhound &ldquo;The Plague Doctor&rdquo; skin&quot;,
        &quot;images&quot;: [
            &quot;https://apexitemstore.com/wp-content/uploads/2022/07/the-plague-doctor.webp&quot;,
            &quot;https://images.gamewatcherstatic.com/image/file/6/b9/98506/large_28776876.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 8,
        &quot;game_id&quot;: 3,
        &quot;type&quot;: &quot;Weapon Skin&quot;,
        &quot;description&quot;: &quot;AK-47 | Redline&quot;,
        &quot;images&quot;: [
            &quot;https://blog-uploads.eneba.games/uploads/2026/03/ak-47-redline-best-ak47-skins.webp&quot;,
            &quot;https://ss.bitskins.com/18/1839e3f16a1fb931365eb914ed52f682-front.webp&quot;,
            &quot;https://cfdn.wiki.skin.club/skins/top100/AK-47/Redline/Neo-Noir0001.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 9,
        &quot;game_id&quot;: 3,
        &quot;type&quot;: &quot;Knife Skin&quot;,
        &quot;description&quot;: &quot;Karambit | Doppler&quot;,
        &quot;images&quot;: [
            &quot;https://knify.gg/medias/2023/05/real-cs2-karambit-knife-doppler-phase-2-v2-irl-2000x2000.webp&quot;,
            &quot;https://ss.bitskins.com/42/42f94b50e578f7315b2049759e4e9393-front.webp&quot;,
            &quot;https://pricempire.com/assets/guides/karambit-doppler-ruby-the-ultimate-guide-to-karambit-doppler-ruby-pattern-knife-/2.webp&quot;,
            &quot;https://storage.vpesports.com/images/f3ftJHzuSNefaYQjzbvJKA.webp&quot;,
            &quot;https://cfdn.wiki.skin.club/skins/top100/Karambit/Gamma%20Doppler/Gamma%20Doppler0001.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 10,
        &quot;game_id&quot;: 5,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Ezio Auditore&rsquo;s Hidden Blade&quot;,
        &quot;images&quot;: [
            &quot;https://p19-oec-general-useast5.ttcdn-us.com/tos-useast5-i-omjb5zjo8w-tx/1128d1ba68814b5ab89033f90f75ac30~tplv-fhlh96nyum-resize-webp:800:800.webp&quot;,
            &quot;https://cdn.toyokoku.com.au/app/uploads/2025/04/06000406/14_64f0111c-0b64-4770-a4bd-f2de99aafabd-scaled.webp&quot;
        ],
        &quot;map_location&quot;: [
            43.7696,
            11.2558
        ]
    },
    {
        &quot;id&quot;: 11,
        &quot;game_id&quot;: 6,
        &quot;type&quot;: &quot;Relic&quot;,
        &quot;description&quot;: &quot;Rakyat Relic&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/6c5bfe0a39977741/FC3_cutout_relicscollage.avif&quot;
        ],
        &quot;map_location&quot;: [
            -17.7134,
            178.065
        ]
    },
    {
        &quot;id&quot;: 12,
        &quot;game_id&quot;: 7,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Spec Ops 1911&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/89543ef72593ff83/specops1911-description.avif&quot;,
            &quot;https://8upload.com/preview/23ac0f4229de52d2/Spec_Ops_1911.avif&quot;
        ],
        &quot;map_location&quot;: [
            41.8781,
            -87.6298
        ]
    },
    {
        &quot;id&quot;: 13,
        &quot;game_id&quot;: 8,
        &quot;type&quot;: &quot;Gear Set&quot;,
        &quot;description&quot;: &quot;Striker&rsquo;s Battlegear Set&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/e5f07e2e273dfdc0/striker-gear-set-is-back-v0-g79v9fy7paj41.avif&quot;,
            &quot;https://8upload.com/preview/5b50718fdc67affa/Striker_Classified.avif&quot;
        ],
        &quot;map_location&quot;: [
            40.7128,
            -74.006
        ]
    },
    {
        &quot;id&quot;: 14,
        &quot;game_id&quot;: 9,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Sword of the Duat&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/22a407e365472fa6/swordofduat.avif&quot;,
            &quot;https://8upload.com/preview/02cc1abedb38bb3f/ACO_Sword_of_the_Duat.avif&quot;
        ],
        &quot;map_location&quot;: [
            26.8206,
            30.8025
        ]
    },
    {
        &quot;id&quot;: 15,
        &quot;game_id&quot;: 10,
        &quot;type&quot;: &quot;Weapon Finish&quot;,
        &quot;description&quot;: &quot;D2 Shotgun Outlaw finish&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/46ef6d885e3f0ad9/fc5-d2-outlaw.avif&quot;,
            &quot;https://8upload.com/preview/469d281397c02618/d2outlaw-fc5.avif&quot;
        ],
        &quot;map_location&quot;: [
            45,
            -110
        ]
    },
    {
        &quot;id&quot;: 16,
        &quot;game_id&quot;: 11,
        &quot;type&quot;: &quot;Exotic Weapon&quot;,
        &quot;description&quot;: &quot;Chatterbox SMG&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/a4699bbf6a1d9017/The_Chatterbox.avif&quot;,
            &quot;https://8upload.com/preview/91485a863729465e/chatterbox.avif&quot;
        ],
        &quot;map_location&quot;: [
            38.9072,
            -77.0369
        ]
    },
    {
        &quot;id&quot;: 17,
        &quot;game_id&quot;: 13,
        &quot;type&quot;: &quot;Elite Bike&quot;,
        &quot;description&quot;: &quot;Process 153 CR DL 29 01&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/6675b07dddc61a16/Process_153_CR_DL_29_01.avif&quot;,
            &quot;https://8upload.com/preview/f8abb0e404b3643c/process_153_CR_DL_29_01.avif&quot;
        ],
        &quot;map_location&quot;: [
            46.8523,
            -121.7603
        ]
    },
    {
        &quot;id&quot;: 18,
        &quot;game_id&quot;: 14,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Na&rsquo;vi Longbow&quot;,
        &quot;images&quot;: [
            &quot;https://egw.news/uploads/news/1694774299867.webp&quot;,
            &quot;https://entertainium.co/wp-content/uploads/2023/12/avatar-frontiers-002-1024x576.jpg.webp&quot;
        ],
        &quot;map_location&quot;: [
            -3.4653,
            -62.2159
        ]
    },
    {
        &quot;id&quot;: 19,
        &quot;game_id&quot;: 17,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;M416 Assault Rifle&quot;,
        &quot;images&quot;: [
            &quot;https://i.namu.wiki/i/ljCuqpAmS_wTwYrxd8h3ckMVf3ZCnfKjLBNIK8KcVArFpE4Ge1ZaEoKqB51U_aeU2GJF94gP8I3-_PQKUcMWlg.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 20,
        &quot;game_id&quot;: 16,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;M-920 Cain&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/e3168efd3293ba4e/ME3_Cain_Heavy_Weapon.avif&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 21,
        &quot;game_id&quot;: 18,
        &quot;type&quot;: &quot;Artifact&quot;,
        &quot;description&quot;: &quot;Elven Relic&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/b4f0db669d69865d/Elven_Artifact_Inquisition.avif&quot;,
            &quot;https://8upload.com/preview/bd325316300fdafe/artifact_third_hinterlands_3-elvenrelic.avif&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 22,
        &quot;game_id&quot;: 20,
        &quot;type&quot;: &quot;Titan Loadout&quot;,
        &quot;description&quot;: &quot;Ion Titan Configuration&quot;,
        &quot;images&quot;: [
            &quot;https://cdn.mobygames.com/575bceda-abfe-11ed-b83f-02420a000135.webp&quot;,
            &quot;https://img-new.cgtrader.com/items/6181656/468f7ae1cf/ion-inspired-by-titanfall-2-articulated-3d-printable-model-3d-model-468f7ae1cf.webp&quot;,
            &quot;https://media.craiyon.com/2025-10-12/HveKvu-PQcWJxtmZaMKotQ.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 23,
        &quot;game_id&quot;: 23,
        &quot;type&quot;: &quot;Customization&quot;,
        &quot;description&quot;: &quot;Lightsaber Parts (Ilum crystal)&quot;,
        &quot;images&quot;: [
            &quot;https://framerusercontent.com/images/2exaQkTOjCw4aHCGXi0YrObcnp4.webp&quot;,
            &quot;https://framerusercontent.com/images/GqpWb0W6vD0y5VMWRH8AlQAg.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 24,
        &quot;game_id&quot;: 25,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Gravity Gun (Zero Point Energy Field Manipulator)&quot;,
        &quot;images&quot;: [
            &quot;https://i.namu.wiki/i/9CKYJOBmC6r9azbq20r-2U78bLOZlQi57PoMaxQERVPz7UOCbCci7z4hqvvLlcyr2G1Fq5sE6Mt4HtE-lzOBAw.webp&quot;,
            &quot;https://m.gjcdn.net/video-poster/900/31144844-vnhcvstj-v4.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 25,
        &quot;game_id&quot;: 26,
        &quot;type&quot;: &quot;Tool&quot;,
        &quot;description&quot;: &quot;Portal Gun (Aperture Science Handheld Device)&quot;,
        &quot;images&quot;: [
            &quot;https://images.gamebanana.com/img/ss/mods/5d4e6e1d2b7d0.webp&quot;,
            &quot;https://i.namu.wiki/i/RPMDE2VbCpJbXEY1tZY5_KzrVP0gX8vdOu9eL-dfZCd-pYtONDpnTTA_AZngDwcG5E-n_jbyOn17bEDFTeaPAg.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 26,
        &quot;game_id&quot;: 28,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Chainsaw&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/39cb89e37fa6857d/Chainsaw.avif&quot;,
            &quot;https://8upload.com/preview/c63276b9c0ec4c20/Imgres-chainsaw.avif&quot;,
            &quot;https://8upload.com/preview/f2a89f49410a2d34/chainsaw-mistake-l4d2.avif&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 27,
        &quot;game_id&quot;: 30,
        &quot;type&quot;: &quot;Cosmetic&quot;,
        &quot;description&quot;: &quot;Arcana &ndash; Demon Eater (Shadow Fiend)&quot;,
        &quot;images&quot;: [
            &quot;https://image-proxy.bo3.gg/uploads/image/85788/image/webp-2dd7967c7e320d2d0b3bc31bd23dda99.webp&quot;,
            &quot;https://storage.vpesports.com/images/fGCNATAMhmiDpAyx6BhV35.webp&quot;,
            &quot;https://market4.pro/thumbs/0_0/economy/image/-9a81dlWLwJ2UUGcVs_nsVtzdOEdtWwKGZZLQHTxDZ7I56KW1Zwwo4NUX4oFJZEHLbXK9QlSPcU8rA1YXkHfVeHixMfSV1JjIw1SuL6aLwJt3P33dDxW6c74kYLYlK6gYb6HwTsAv8MhjLqRotnzilXk-0dqNmjzdoSQJwBvMlGB_E_-n7kPpm_e3A.webp&quot;,
            &quot;https://images5.alphacoders.com/389/thumb-350-389078.webp&quot;,
            &quot;https://i.namu.wiki/i/CyAFEfer5_XSa93kJFvqzJdAKgoE4u3Y7CGl6YHFdYSFAKFdDicMM_bV9cqKXvwR1IcRJOyQAWU0EzTtGDKlIA.webp&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    },
    {
        &quot;id&quot;: 28,
        &quot;game_id&quot;: 32,
        &quot;type&quot;: &quot;Upgrade&quot;,
        &quot;description&quot;: &quot;Pistol Reflex Sight Upgrade&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/4fc7a54ca33ac8ec/reflex_sight.avif&quot;,
            &quot;https://8upload.com/preview/1a70273710791e8e/reflexsight.avif&quot;
        ],
        &quot;map_location&quot;: [
            0,
            0
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-collectibles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-collectibles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-collectibles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-collectibles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-collectibles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-collectibles" data-method="GET"
      data-path="api/collectibles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-collectibles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-collectibles"
                    onclick="tryItOut('GETapi-collectibles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-collectibles"
                    onclick="cancelTryOut('GETapi-collectibles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-collectibles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/collectibles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-collectibles">Store a newly created resource in storage.</h2>

<p>
</p>



<span id="example-requests-POSTapi-collectibles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/collectibles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"game_id\": 16,
    \"type\": \"n\",
    \"description\": \"Animi quos velit et fugiat.\",
    \"images\": [
        \"d\"
    ],
    \"map_location\": [
        4326.41688
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collectibles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "game_id": 16,
    "type": "n",
    "description": "Animi quos velit et fugiat.",
    "images": [
        "d"
    ],
    "map_location": [
        4326.41688
    ]
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-collectibles">
</span>
<span id="execution-results-POSTapi-collectibles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-collectibles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-collectibles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-collectibles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-collectibles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-collectibles" data-method="POST"
      data-path="api/collectibles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-collectibles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-collectibles"
                    onclick="tryItOut('POSTapi-collectibles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-collectibles"
                    onclick="cancelTryOut('POSTapi-collectibles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-collectibles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/collectibles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>game_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="game_id"                data-endpoint="POSTapi-collectibles"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the games table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="POSTapi-collectibles"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="POSTapi-collectibles"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must be at least 10 characters. Must not be greater than 500 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="images[0]"                data-endpoint="POSTapi-collectibles"
               data-component="body">
        <input type="text" style="display: none"
               name="images[1]"                data-endpoint="POSTapi-collectibles"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>map_location</code></b>&nbsp;&nbsp;
<small>number[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="map_location[0]"                data-endpoint="POSTapi-collectibles"
               data-component="body">
        <input type="number" style="display: none"
               name="map_location[1]"                data-endpoint="POSTapi-collectibles"
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-GETapi-collectibles--id-">Display the specified resource.</h2>

<p>
</p>



<span id="example-requests-GETapi-collectibles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/collectibles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collectibles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-collectibles--id-">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;id&quot;: 1,
    &quot;game_id&quot;: 1,
    &quot;type&quot;: &quot;Weapon Skin&quot;,
    &quot;description&quot;: &quot;Legendary Viking Axe skin&quot;,
    &quot;images&quot;: [
        &quot;https://8upload.com//image/1c9a2746c8033e3b/Varins_Axe_Screenshot_2020-11-25_20-57-09.avif&quot;,
        &quot;https://8upload.com/preview/e477244465625c9f/forging_the_ac_valhalla_axe_t.avif&quot;
    ],
    &quot;map_location&quot;: [
        1234567.123456,
        9876543.987654
    ]
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-collectibles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-collectibles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-collectibles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-collectibles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-collectibles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-collectibles--id-" data-method="GET"
      data-path="api/collectibles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-collectibles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-collectibles--id-"
                    onclick="tryItOut('GETapi-collectibles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-collectibles--id-"
                    onclick="cancelTryOut('GETapi-collectibles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-collectibles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/collectibles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="GETapi-collectibles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the collectible. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-PUTapi-collectibles--id-">Update the specified resource in storage.</h2>

<p>
</p>



<span id="example-requests-PUTapi-collectibles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request PUT \
    "http://localhost/api/collectibles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"game_id\": 16,
    \"type\": \"n\",
    \"description\": \"Animi quos velit et fugiat.\",
    \"images\": [
        \"d\"
    ],
    \"map_location\": [
        4326.41688
    ]
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collectibles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "game_id": 16,
    "type": "n",
    "description": "Animi quos velit et fugiat.",
    "images": [
        "d"
    ],
    "map_location": [
        4326.41688
    ]
};

fetch(url, {
    method: "PUT",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-PUTapi-collectibles--id-">
</span>
<span id="execution-results-PUTapi-collectibles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-PUTapi-collectibles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-collectibles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-PUTapi-collectibles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-collectibles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-PUTapi-collectibles--id-" data-method="PUT"
      data-path="api/collectibles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('PUTapi-collectibles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-PUTapi-collectibles--id-"
                    onclick="tryItOut('PUTapi-collectibles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-PUTapi-collectibles--id-"
                    onclick="cancelTryOut('PUTapi-collectibles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-PUTapi-collectibles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-darkblue">PUT</small>
            <b><code>api/collectibles/{id}</code></b>
        </p>
            <p>
            <small class="badge badge-purple">PATCH</small>
            <b><code>api/collectibles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="PUTapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="PUTapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="PUTapi-collectibles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the collectible. Example: <code>1</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>game_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="game_id"                data-endpoint="PUTapi-collectibles--id-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the games table. Example: <code>16</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>type</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="type"                data-endpoint="PUTapi-collectibles--id-"
               value="n"
               data-component="body">
    <br>
<p>Must not be greater than 100 characters. Example: <code>n</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>description</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="description"                data-endpoint="PUTapi-collectibles--id-"
               value="Animi quos velit et fugiat."
               data-component="body">
    <br>
<p>Must be at least 10 characters. Must not be greater than 500 characters. Example: <code>Animi quos velit et fugiat.</code></p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>images</code></b>&nbsp;&nbsp;
<small>string[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="images[0]"                data-endpoint="PUTapi-collectibles--id-"
               data-component="body">
        <input type="text" style="display: none"
               name="images[1]"                data-endpoint="PUTapi-collectibles--id-"
               data-component="body">
    <br>
<p>Must be a valid URL. Must not be greater than 500 characters.</p>
        </div>
                <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>map_location</code></b>&nbsp;&nbsp;
<small>number[]</small>&nbsp;
<i>optional</i> &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="map_location[0]"                data-endpoint="PUTapi-collectibles--id-"
               data-component="body">
        <input type="number" style="display: none"
               name="map_location[1]"                data-endpoint="PUTapi-collectibles--id-"
               data-component="body">
    <br>

        </div>
        </form>

                    <h2 id="endpoints-DELETEapi-collectibles--id-">Remove the specified resource from storage.</h2>

<p>
</p>



<span id="example-requests-DELETEapi-collectibles--id-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/collectibles/1" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/collectibles/1"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-collectibles--id-">
</span>
<span id="execution-results-DELETEapi-collectibles--id-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-collectibles--id-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-collectibles--id-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-collectibles--id-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-collectibles--id-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-collectibles--id-" data-method="DELETE"
      data-path="api/collectibles/{id}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-collectibles--id-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-collectibles--id-"
                    onclick="tryItOut('DELETEapi-collectibles--id-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-collectibles--id-"
                    onclick="cancelTryOut('DELETEapi-collectibles--id-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-collectibles--id-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/collectibles/{id}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-collectibles--id-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="id"                data-endpoint="DELETEapi-collectibles--id-"
               value="1"
               data-component="url">
    <br>
<p>The ID of the collectible. Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-games--gameId--collectibles">Get all collectibles for a specific game by gameId</h2>

<p>
</p>



<span id="example-requests-GETapi-games--gameId--collectibles">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/games/1/collectibles" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/games/1/collectibles"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-games--gameId--collectibles">
            <blockquote>
            <p>Example response (200):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">[
    {
        &quot;id&quot;: 1,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Weapon Skin&quot;,
        &quot;description&quot;: &quot;Legendary Viking Axe skin&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com//image/1c9a2746c8033e3b/Varins_Axe_Screenshot_2020-11-25_20-57-09.avif&quot;,
            &quot;https://8upload.com/preview/e477244465625c9f/forging_the_ac_valhalla_axe_t.avif&quot;
        ],
        &quot;map_location&quot;: [
            1234567.123456,
            9876543.987654
        ]
    },
    {
        &quot;id&quot;: 4,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Weapon&quot;,
        &quot;description&quot;: &quot;Excalibur greatsword&quot;,
        &quot;images&quot;: [
            &quot;https://exputer.com/wp-content/uploads/2022/08/Excalibur-AC-Valhalla.webp&quot;,
            &quot;https://www.pley-again.com/wp-content/uploads/2025/10/Assassins-Creed%C2%AE-Valhalla_20251016002335.webp&quot;,
            &quot;https://www.nextplayer.it/wp-content/uploads/2023/07/F0PTIEJagAEIITx-800x445.webp&quot;
        ],
        &quot;map_location&quot;: [
            52.3555,
            -1.1743
        ]
    },
    {
        &quot;id&quot;: 5,
        &quot;game_id&quot;: 1,
        &quot;type&quot;: &quot;Armor Set&quot;,
        &quot;description&quot;: &quot;Thor Armor Set&quot;,
        &quot;images&quot;: [
            &quot;https://8upload.com/preview/3c5b61aacf404eb0/ACV_-_Thors_Set_concept_1.avif&quot;,
            &quot;https://8upload.com/preview/8361331271a0ff97/thors-set.avif&quot;
        ],
        &quot;map_location&quot;: [
            60.472,
            8.4689
        ]
    }
]</code>
 </pre>
    </span>
<span id="execution-results-GETapi-games--gameId--collectibles" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-games--gameId--collectibles"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-games--gameId--collectibles"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-games--gameId--collectibles" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-games--gameId--collectibles">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-games--gameId--collectibles" data-method="GET"
      data-path="api/games/{gameId}/collectibles"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-games--gameId--collectibles', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-games--gameId--collectibles"
                    onclick="tryItOut('GETapi-games--gameId--collectibles');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-games--gameId--collectibles"
                    onclick="cancelTryOut('GETapi-games--gameId--collectibles');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-games--gameId--collectibles"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/games/{gameId}/collectibles</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-games--gameId--collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-games--gameId--collectibles"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>gameId</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="gameId"                data-endpoint="GETapi-games--gameId--collectibles"
               value="1"
               data-component="url">
    <br>
<p>Example: <code>1</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-POSTapi-logout">POST api/logout</h2>

<p>
</p>



<span id="example-requests-POSTapi-logout">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/logout" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/logout"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-logout">
</span>
<span id="execution-results-POSTapi-logout" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-logout"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-logout"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-logout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-logout">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-logout" data-method="POST"
      data-path="api/logout"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-logout', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-logout"
                    onclick="tryItOut('POSTapi-logout');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-logout"
                    onclick="cancelTryOut('POSTapi-logout');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-logout"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/logout</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-logout"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-me">Return authenticated user&#039;s own profile data</h2>

<p>
</p>



<span id="example-requests-GETapi-me">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/me" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/me"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-me">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-me" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-me"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-me"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-me" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-me">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-me" data-method="GET"
      data-path="api/me"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-me', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-me"
                    onclick="tryItOut('GETapi-me');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-me"
                    onclick="cancelTryOut('GETapi-me');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-me"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/me</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-me"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-GETapi-favorites">GET api/favorites</h2>

<p>
</p>



<span id="example-requests-GETapi-favorites">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/favorites" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/favorites"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-favorites">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-favorites" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-favorites"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-favorites"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-favorites" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-favorites">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-favorites" data-method="GET"
      data-path="api/favorites"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-favorites', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-favorites"
                    onclick="tryItOut('GETapi-favorites');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-favorites"
                    onclick="cancelTryOut('GETapi-favorites');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-favorites"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/favorites</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-favorites"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        </form>

                    <h2 id="endpoints-POSTapi-favorites--gameId-">POST api/favorites/{gameId}</h2>

<p>
</p>



<span id="example-requests-POSTapi-favorites--gameId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request POST \
    "http://localhost/api/favorites/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json" \
    --data "{
    \"game_id\": 16
}"
</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/favorites/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "game_id": 16
};

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-POSTapi-favorites--gameId-">
</span>
<span id="execution-results-POSTapi-favorites--gameId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-POSTapi-favorites--gameId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-favorites--gameId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-POSTapi-favorites--gameId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-favorites--gameId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-POSTapi-favorites--gameId-" data-method="POST"
      data-path="api/favorites/{gameId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('POSTapi-favorites--gameId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-POSTapi-favorites--gameId-"
                    onclick="tryItOut('POSTapi-favorites--gameId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-POSTapi-favorites--gameId-"
                    onclick="cancelTryOut('POSTapi-favorites--gameId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-POSTapi-favorites--gameId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-black">POST</small>
            <b><code>api/favorites/{gameId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="POSTapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="POSTapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>gameId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gameId"                data-endpoint="POSTapi-favorites--gameId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                            <h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
        <div style=" padding-left: 28px;  clear: unset;">
            <b style="line-height: 2;"><code>game_id</code></b>&nbsp;&nbsp;
<small>integer</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="number" style="display: none"
               step="any"               name="game_id"                data-endpoint="POSTapi-favorites--gameId-"
               value="16"
               data-component="body">
    <br>
<p>The <code>id</code> of an existing record in the games table. Example: <code>16</code></p>
        </div>
        </form>

                    <h2 id="endpoints-GETapi-favorites--gameId-">GET api/favorites/{gameId}</h2>

<p>
</p>



<span id="example-requests-GETapi-favorites--gameId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/favorites/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/favorites/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-favorites--gameId-">
            <blockquote>
            <p>Example response (401):</p>
        </blockquote>
                <details class="annotation">
            <summary style="cursor: pointer;">
                <small onclick="textContent = parentElement.parentElement.open ? 'Show headers' : 'Hide headers'">Show headers</small>
            </summary>
            <pre><code class="language-http">cache-control: no-cache, private
content-type: application/json
access-control-allow-origin: *
 </code></pre></details>         <pre>

<code class="language-json" style="max-height: 300px;">{
    &quot;message&quot;: &quot;Unauthenticated.&quot;
}</code>
 </pre>
    </span>
<span id="execution-results-GETapi-favorites--gameId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-favorites--gameId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-favorites--gameId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-favorites--gameId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-favorites--gameId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-favorites--gameId-" data-method="GET"
      data-path="api/favorites/{gameId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-favorites--gameId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-favorites--gameId-"
                    onclick="tryItOut('GETapi-favorites--gameId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-favorites--gameId-"
                    onclick="cancelTryOut('GETapi-favorites--gameId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-favorites--gameId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/favorites/{gameId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>gameId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gameId"                data-endpoint="GETapi-favorites--gameId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-DELETEapi-favorites--gameId-">DELETE api/favorites/{gameId}</h2>

<p>
</p>



<span id="example-requests-DELETEapi-favorites--gameId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request DELETE \
    "http://localhost/api/favorites/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/favorites/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-DELETEapi-favorites--gameId-">
</span>
<span id="execution-results-DELETEapi-favorites--gameId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-DELETEapi-favorites--gameId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-favorites--gameId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-DELETEapi-favorites--gameId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-favorites--gameId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-DELETEapi-favorites--gameId-" data-method="DELETE"
      data-path="api/favorites/{gameId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('DELETEapi-favorites--gameId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-DELETEapi-favorites--gameId-"
                    onclick="tryItOut('DELETEapi-favorites--gameId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-DELETEapi-favorites--gameId-"
                    onclick="cancelTryOut('DELETEapi-favorites--gameId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-DELETEapi-favorites--gameId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-red">DELETE</small>
            <b><code>api/favorites/{gameId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="DELETEapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="DELETEapi-favorites--gameId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>gameId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="gameId"                data-endpoint="DELETEapi-favorites--gameId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

                    <h2 id="endpoints-GETapi-admin-favorites--userId-">GET api/admin/favorites/{userId}</h2>

<p>
</p>



<span id="example-requests-GETapi-admin-favorites--userId-">
<blockquote>Example request:</blockquote>


<div class="bash-example">
    <pre><code class="language-bash">curl --request GET \
    --get "http://localhost/api/admin/favorites/architecto" \
    --header "Content-Type: application/json" \
    --header "Accept: application/json"</code></pre></div>


<div class="javascript-example">
    <pre><code class="language-javascript">const url = new URL(
    "http://localhost/api/admin/favorites/architecto"
);

const headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response =&gt; response.json());</code></pre></div>

</span>

<span id="example-responses-GETapi-admin-favorites--userId-">
    </span>
<span id="execution-results-GETapi-admin-favorites--userId-" hidden>
    <blockquote>Received response<span
                id="execution-response-status-GETapi-admin-favorites--userId-"></span>:
    </blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-admin-favorites--userId-"
      data-empty-response-text="<Empty response>" style="max-height: 400px;"></code></pre>
</span>
<span id="execution-error-GETapi-admin-favorites--userId-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-admin-favorites--userId-">

Tip: Check that you&#039;re properly connected to the network.
If you&#039;re a maintainer of ths API, verify that your API is running and you&#039;ve enabled CORS.
You can check the Dev Tools console for debugging information.</code></pre>
</span>
<form id="form-GETapi-admin-favorites--userId-" data-method="GET"
      data-path="api/admin/favorites/{userId}"
      data-authed="0"
      data-hasfiles="0"
      data-isarraybody="0"
      autocomplete="off"
      onsubmit="event.preventDefault(); executeTryOut('GETapi-admin-favorites--userId-', this);">
    <h3>
        Request&nbsp;&nbsp;&nbsp;
                    <button type="button"
                    style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-tryout-GETapi-admin-favorites--userId-"
                    onclick="tryItOut('GETapi-admin-favorites--userId-');">Try it out ⚡
            </button>
            <button type="button"
                    style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-canceltryout-GETapi-admin-favorites--userId-"
                    onclick="cancelTryOut('GETapi-admin-favorites--userId-');" hidden>Cancel 🛑
            </button>&nbsp;&nbsp;
            <button type="submit"
                    style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;"
                    id="btn-executetryout-GETapi-admin-favorites--userId-"
                    data-initial-text="Send Request 💥"
                    data-loading-text="⏱ Sending..."
                    hidden>Send Request 💥
            </button>
            </h3>
            <p>
            <small class="badge badge-green">GET</small>
            <b><code>api/admin/favorites/{userId}</code></b>
        </p>
                <h4 class="fancy-heading-panel"><b>Headers</b></h4>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Content-Type</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Content-Type"                data-endpoint="GETapi-admin-favorites--userId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                                <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>Accept</code></b>&nbsp;&nbsp;
&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="Accept"                data-endpoint="GETapi-admin-favorites--userId-"
               value="application/json"
               data-component="header">
    <br>
<p>Example: <code>application/json</code></p>
            </div>
                        <h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
                    <div style="padding-left: 28px; clear: unset;">
                <b style="line-height: 2;"><code>userId</code></b>&nbsp;&nbsp;
<small>string</small>&nbsp;
 &nbsp;
 &nbsp;
                <input type="text" style="display: none"
                              name="userId"                data-endpoint="GETapi-admin-favorites--userId-"
               value="architecto"
               data-component="url">
    <br>
<p>Example: <code>architecto</code></p>
            </div>
                    </form>

            

        
    </div>
    <div class="dark-box">
                    <div class="lang-selector">
                                                        <button type="button" class="lang-button" data-language-name="bash">bash</button>
                                                        <button type="button" class="lang-button" data-language-name="javascript">javascript</button>
                            </div>
            </div>
</div>
</body>
</html>
