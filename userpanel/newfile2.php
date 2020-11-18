<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>undefined</title>
    <meta name="generator" content="Google Web Designer 9.0.2.0915">
    <style type="text/css" id="gwd-text-style">
        p {
            margin: 0px;
        }
        h1 {
            margin: 0px;
        }
        h2 {
            margin: 0px;
        }
        h3 {
            margin: 0px;
        }
    </style>
    <style type="text/css">
        html, body {
            width: 100%;
            height: 100%;
            margin: 0px;
        }
        body {
            background-color: transparent;
            transform: perspective(1400px) matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1);
            transform-style: preserve-3d;
        }
        .gwd-label-589q {
            position: absolute;
            height: 20px;
            width: 350px;
            left: 198px;
            top: 11px;
        }
        .gwd-label-ovzw {
            position: absolute;
            height: 20px;
            width: 350px;
            left: 198px;
            top: 66px;
        }
        .gwd-label-113s {
            position: absolute;
            height: 20px;
            width: 350px;
            left: 198px;
            top: 119px;
        }
        .gwd-label-17nj {
            position: absolute;
            height: 20px;
            width: 350px;
            left: 198px;
            top: 171px;
            border-style: none;
        }
        .gwd-label-12mx {
            position: absolute;
            height: 20px;
            left: 198px;
            top: 226px;
            width: 350px;
        }
        .gwd-label-yza3 {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 281px;
        }
        .gwd-label-1l4i {
            position: absolute;
            height: 20px;
            left: 198px;
            top: 331px;
            width: 350px;
        }
        .gwd-input-h8sd {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 31px;
        }
        .gwd-input-10q8 {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 86px;
        }
        .gwd-input-5jtt {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 139px;
        }
        .gwd-input-1yfq {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 191px;
        }
        .gwd-input-3m4z {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 246px;
        }
        .gwd-input-19l7 {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 301px;
        }
        .gwd-input-1nkn {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 198px;
            top: 351px;
        }
        .gwd-form-d29l {
            left: 0px;
            top: 0px;
        }
        .gwd-button-iyho {
            position: absolute;
            width: 100px;
            height: 24px;
            left: 0px;
            top: 353px;
        }
        .gwd-input-2g9t {
            left: 0px;
            top: 0px;
        }
        .gwd-button-9mrs {
            position: absolute;
            height: 24px;
            left: 198px;
            top: 377px;
            width: 200px;
        }
        .gwd-select-lpuh {
            position: absolute;
            width: 100px;
            height: 24px;
            left: 198px;
            top: 401px;
        }
        .gwd-label-13bx {
            position: absolute;
            width: 100px;
            height: 20px;
            left: 313px;
            top: 405px;
        }
    </style>
</head>

<body class="htmlNoPages">
<form action="../process.php"  method="post" class="gwd-form-d29l">

    <?php session_start();
        echo '<input name="id" id="myP" value= '.  $_SESSION['login'] . '/>';?>
    <script>
        document.getElementById("myP").style.visibility = "hidden";
    </script>
    <label class="gwd-label-589q"> نوع مسکن،نوع معامله،متراژ و محله برای عنوان را وارد کنید </label>
    <label class="gwd-label-ovzw">توضیحات و امکانات آگهی را وارد کنید</label>
    <label class="gwd-label-113s">سال ساخت را وارد کنید</label>
    <label class="gwd-label-17nj">تعداد اتاق را وارد کنید</label>
    <label class="gwd-label-12mx">طبقه واحد را وارد کنید</label>
    <label class="gwd-label-yza3">قیمت را وارد کنید</label>
    <label class="gwd-label-1l4i">شماره تلفن همراه خود را وارد کنید</label>
    <input type="text" name="PropertyType" class="gwd-input-h8sd">
    <input type="text" name="Comments" class="gwd-input-10q8">
    <input type="text" name="Year" class="gwd-input-5jtt">
    <input type="text" name="No" class="gwd-input-1yfq">
    <input type="text" name="Floor" class="gwd-input-3m4z">
    <input type="text" name="Price" class="gwd-input-19l7">
    <input type="text" name="phoneNumber" class="gwd-input-1nkn">
    <input type="file" class="gwd-button-9mrs" name="fileToUpload" >
    <select id="select_1" name="type" class="gwd-select-lpuh" data-gwd-name="type">
        <option value="1">اجاره</option>
        <option value="2">رهن</option>
        <option value="3" selected="">فروش</option>
    </select>
    <label id="label_1"  class="gwd-label-13bx">نوع</label>
    <button type="submit" class="gwd-button-iyho" name="newfile">ذخیره</button>
</form>
</body>

</html>