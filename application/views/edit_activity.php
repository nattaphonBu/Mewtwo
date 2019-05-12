<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#"><img src="/static/images/soda.png" width="60px"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">หน้าหลัก <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="btn btn-outline-primary my-2 my-sm-0" href="{% url 'account_list1' %}">จัดการบัญชี</a>
          </li>
          &nbsp;&nbsp;
          <li class="nav-item">
            <a class="btn btn-outline-primary my-2 my-sm-0" href="{% url 'drink_list' %}">จัดการเครื่องดื่ม</a>
          </li>
        </ul>
        <span class="navbar-text">
            <a href="{% url 'logout_request' %}"><button class="btn btn-outline-primary my-2 my-sm-0 ">ลงชื่อออก</button></a>
        </span>
      </div>
    </nav>
    <h1>แก้ไขกิจกรรม</h1>
    <form method="post" action="<form action="" method="get">
<div class="form-group">
  <label for="usr">ชื่อกิจกรรม</label>
  <input type="text" class="form-control col-5" id="nameActivity">
</div>
<div class="form-group">
  <label for="usr">วัน</label>
  <input type="date" id="day" name="start"
       min="2019-05" value="2018-05">
        
</div>
<div class="form-group">
  <label for="usr">เวลา</label>
  <input type="time" class="form-control col-5" id="time">
</div>
<div class="form-group">
  <label for="year">ชั้นปี</label>
  <select class="form-control col-5" id="year">
    <option>1</option>
    <option>2</option>
    <option>3</option>
	<option>4</option>
	<option>5</option>
	<option>6</option>
	<option>7</option>
	<option>8</option>
  </select>
</div>
<div class="form-group">
  <label for="term">เทอม</label>
  <select class="form-control col-5" id="sel1">
    <option>1</option>
    <option>2</option>
    <option>3</option>
  </select>
</div>
<div class="form-group">
  <label for="responsible">ชื่อผู้รับผิดชอบ</label>
  <input type="text" class="form-control col-5" id="usr">
</div>
<button type="button" class="btn btn-primary btn-md col-5">บันทึก</button>
</form>