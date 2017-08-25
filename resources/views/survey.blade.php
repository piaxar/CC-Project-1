<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Cloud computing group assignment</title>
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: -20px;
            }
            .form-style-1 {
                margin:10px auto;
                max-width: 400px;
                padding: 20px 12px 10px 20px;
                font: 13px "Lucida Sans Unicode", "Lucida Grande", sans-serif;
            }
            .form-style-1 li {
                padding: 0;
                display: block;
                list-style: none;
                margin: 10px 0 0 0;
            }
            .form-style-1 label{
                margin:0 0 3px 0;
                padding:0px;
                display:block;
                font-weight: bold;
            }
            .form-style-1 input[type=text],
            .form-style-1 input[type=date],
            .form-style-1 input[type=datetime],
            .form-style-1 input[type=number],
            .form-style-1 input[type=search],
            .form-style-1 input[type=time],
            .form-style-1 input[type=url],
            .form-style-1 input[type=email],
            textarea,
            select{
                box-sizing: border-box;
                -webkit-box-sizing: border-box;
                -moz-box-sizing: border-box;
                border:1px solid #BEBEBE;
                padding: 7px;
                margin:0px;
                -webkit-transition: all 0.30s ease-in-out;
                -moz-transition: all 0.30s ease-in-out;
                -ms-transition: all 0.30s ease-in-out;
                -o-transition: all 0.30s ease-in-out;
                outline: none;
            }
            .form-style-1 input[type=text]:focus,
            .form-style-1 input[type=date]:focus,
            .form-style-1 input[type=datetime]:focus,
            .form-style-1 input[type=number]:focus,
            .form-style-1 input[type=search]:focus,
            .form-style-1 input[type=time]:focus,
            .form-style-1 input[type=url]:focus,
            .form-style-1 input[type=email]:focus,
            .form-style-1 textarea:focus,
            .form-style-1 select:focus{
                -moz-box-shadow: 0 0 8px #88D5E9;
                -webkit-box-shadow: 0 0 8px #88D5E9;
                box-shadow: 0 0 8px #88D5E9;
                border: 1px solid #88D5E9;
            }
            .form-style-1 .field-divided{
                width: 49%;
            }

            .form-style-1 .field-long{
                width: 100%;
            }
            .form-style-1 .field-select{
                width: 100%;
            }
            .form-style-1 .field-textarea{
                height: 100px;
            }
            .form-style-1 input[type=submit], .form-style-1 input[type=button]{
                background: #4B99AD;
                padding: 8px 15px 8px 15px;
                border: none;
                color: #fff;
            }
            .form-style-1 input[type=submit]:hover, .form-style-1 input[type=button]:hover{
                background: #4691A4;
                box-shadow:none;
                -moz-box-shadow:none;
                -webkit-box-shadow:none;
            }
            .form-style-1 .required{
                color:red;
            }
        </style>
    </head>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="top-right links">
                <a href="/change-language">@lang('survey.lang')</a>
            </div>
            <div class="content">
                <div class="title m-b-md">
                    @lang('survey.title')
                </div>
                <table>
                    <tr>
                        <form method="post" name="survey" onsubmit="return validateForm()" action="/end">
                            {!! csrf_field() !!}
                            <ul class="form-style-1">
                                <li>
                                    <label>@lang('survey.course_title')<span class="required">*</span></label>
                                    <select name="course-id" id="course-id" class="field-select">
                                        <option value="BS1">BS1</option>
                                        <option value="BS2">BS2</option>
                                        <option value="BS3">BS3</option>
                                        <option value="BS4">BS4</option>
                                        <option value="MS1">MS1</option>
                                        <option value="MS2">MS2</option>
                                    </select>
                                </li>
                                <li>
                                    <label>@lang('survey.os_title')<span class="required">*</span></label>
                                    <select name="os" id="os" class="field-select">
                                        <option value="Windows">Windows</option>
                                        <option value="MacOS">MacOS</option>
                                        <option value="Linux">Linux</option>

                                    </select>
                                </li>
                                <li>
                                    <label>@lang('survey.programming_lang_title')<span class="required">*</span></label>
                                    <select name="programming_lang" id="programming_lang-id" class="field-select">
                                        <option value="Java">Java</option>
                                        <option value="Python">Python</option>
                                        <option value="C/C++">C/C++</option>
                                        <option value="PHP">PHP</option>
                                        <option value="Eiffel">Eiffel</option>
                                    </select>
                                </li>
                                <li>
                                    <label>@lang('survey.experience_title') <span class="required">*</span></label>
                                    <input type="text" id="textInput" value="" placeholder="1" class="field-long">
                                    <input type="range" name="experience_period" id="experience_period" min="1" max="10" value="1"  class="field-long" onchange="updateTextInput(this.value);"/>
                                </li>
                                <li>
                                    <label>@lang('survey.code_title') <span class="required">*</span></label>
                                    <textarea name="code" id="code" class="field-long field-textarea" onchange="validateTextLength(this.value)"></textarea>
                                </li>
                                <li>
                                    <input type="submit" value=@lang('survey.button_message') />
                                </li>
                            </ul>
                        </form>
                    </tr>
                </table>
            </div>
        </div>
        <script type="text/javascript">
            function validateForm()
            {
                var a=document.forms["Form"]["name"].value;
                var b=document.forms["Form"]["surname"].value;
                var c=document.forms["Form"]["group-id"].value;
                var d=document.forms["Form"]["course-id"].value;
                var e=document.forms["Form"]["message"].value;
                if (a == null || a == "",
                    b == null || b == "",
                    c == null || c == "",
                    d == null || d == "",
                    e == null || e == "")
                {
                    alert("Please Fill All Required Field");
                    return false;
                }
                if (e.size < 256)
                {
                    alert("Your text must be longer")
                    return false;
                }

            }
            function validateEmptyString(val) {
                if (val == null || val == "") {
                    alert("Please fill field field")
                    return false;
                }
            }

            function validateTextLength(val) {
                if (val.size > 255) {

                }
            }
            function updateTextInput(val) {
                document.getElementById('textInput').value=val;
            }
        </script>
    </body>
</html>