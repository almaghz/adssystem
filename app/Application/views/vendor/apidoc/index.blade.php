<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>API Reference</title>

    <link rel="stylesheet" href="{{ url('docs') }}/css/style.css" />
    <script src="{{ url('docs') }}/js/all.js"></script>


    <script>
        $(function() {
            setupLanguages(["bash","javascript"]);
        });
    </script>
</head>

<body class="">
<a href="#" id="nav-button">
      <span>
        NAV
        <img src="images/navbar.png" />
      </span>
</a>
<div class="tocify-wrapper">
    <div style="text-align: center;margin-top: 10px">
        <img src="{{ url('/') }}/admin/images/logo.png"  width="100"/>
    </div>
    <div class="lang-selector">
        <a href="#" data-language-name="bash">bash</a>
        <a href="#" data-language-name="javascript">javascript</a>
    </div>
    <div class="search">
        <input type="text" class="search" id="input-search" placeholder="Search">
    </div>
    <ul class="search-results"></ul>
    <div id="toc">
    </div>
    <ul class="toc-footer">
        <li><a href='https://laraflat.com/'>
                LaraFlat
            </a></li>
        <li><a href='https://5dmat-web.com'>
                5dmat-web
            </a></li>
    </ul>
</div>
<div class="page-wrapper">
    <div class="dark-box"></div>
    <div class="content">
        <!-- START_INFO -->
        <h1>Start to use system</h1>
        <p>First thing we use datatable , collective html to create the table view , repository design pattern:<br>
            You will use the order <br></p>
        <pre><code class="language-php">php artisan serve make:admin_model</code></pre>
        <p>this order will make this effective ,</p>
        <p>1-make controller in Application\Controller\admin <br>
            2-make view at Application\Views\admin <br>
            3-make migration database\migrations <br>
            4-make datatable class at Application\DataTables <br>
            5-make model Application\model <br></p>
        <!-- END_INFO -->
        <!-- How_I_Will_Work -->
        <h1>How I Will Work</h1>
        <p>first use this command</p>
        <pre><code class="language-php">php artisan serve make:admin_model</code></pre>
        <p>then you must edit migration after that you must edit the datatable class<br>
            to show data from database<br>
            then edit the model validation and fillable and table name<br>
            edit the form on Application\View\<br></p>
        <!--How_I_Will_Work -->
        <!-- Use_Rich_texT -->
        <h1>Use Rich Text</h1>
        <p>open the view form file<br>
            make new textarea filed add this class to the textarea<br></p>
        <pre><code class="language-css">    tinymce</code></pre>
        <p>then add this code at the bottom of the page</p>
<pre><code class="language-php">    @section('script')
            @include('admin.layout.helpers.tynic')
        @endsection</code></pre>
        <!-- Use_Rich_texT -->
        <!-- AbstractController -->
        <h1>AbstractController</h1>
        <p>All controller will extends this controller <br>
            this controller has this functions to make it easy to add edit update show and delete items form database<br>
            this controller will extends the laravel base controller so do not worry about that</p>
<pre><code class="language-php">GetAll($view , $with = [] , $paginate = 30) //get all data
        createOrEdit($view , $id = null) ///show the view of update of view of create
        storeOrUpdate($array , $id = null , $callback = true)//save new date to data base or update
        deleteItem($id)///delete item by id</code></pre>
        <!-- AbstractController -->
        <!-- Transformers -->
        <h1>Transformers</h1>
        <p>We have Abstract transformers we must extend this class and<br>
            use method transform to transform data</p>
        <!-- Transformers -->
        <!-- DataTable -->
        <h1>DataTable</h1>
        <p>DataTable integrate with this system so when you go to any module you can find we show data <br>
            with data table<br>
            you will find the date table class on this path Application\DataTable depend on model name<br>
            you can customize the fields by edit this function <br></p>
        <pre><code class="language-php">getColumns()</code></pre>
        <p>in this case you must delete or add fields</p>
        <!-- DataTable -->
        <!-- model -->
        <h1>Model</h1>
        <p>you must add three things in all model<br>
            1-the fillable array<br>
            2-the table name<br>
            3-the validation array<br></p>
        <!-- model -->
        <!-- Views -->
        <h1>Views</h1>
        <p>each model you create you will find view folder on<br>
            Application\Views\admin<br>
            you will have edit view index view and show view<br>
            and in button folder you will have the edit and delete button<br></p>
        <!-- Views -->
        <!-- InterFaces -->
        <h1>InterFaces</h1>
        <p>you must use interface to make your logic <br>
            and make your controller more clear<br>
            you will find interface in Application\Repository\Interfaces<br>
            you must bind all interfaces and their eloquent file in the app\Providers\InterFaceBind.php<br></p>
<pre><code class="language-php">   $this-&gt;app-&gt;bind(
        'App\Application\Repository\InterFaces\UserInterface',
        'App\Application\Repository\Eloquent\UserEloquent'
        );</code></pre>
        <!-- InterFaces -->
    </div>
    <div class="dark-box">
        <div class="lang-selector">
            <a href="#" data-language-name="bash">bash</a>
            <a href="#" data-language-name="javascript">javascript</a>
        </div>
    </div>
</div>
</body>
</html>