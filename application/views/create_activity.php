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
    <h1></h1>


    <br>
<div class="container">
  <!-- <h2>Card titles, text, and links</h2> -->
  <div class="card">
    <div class="card-body">
      <h4 class="card-title" align="center">สร้างกิจกรรม</h4>
      <form action="<?php echo base_url('Welcome/insert') ?>" method="get">
        <div class="form-group">
          <label for="usr">ชื่อกิจกรรม</label>
          <input type="text" class="form-control col-5" id="nameActivity" name="nameActivity">
        </div>
        <div class="form-group">
          <label for="usr">รายละเอียดกิจกรรม</label>
          <input type="text" class="form-control col-5" id="details" name="details">
        </div>
        <div class="form-group">
          <label for="usr">วันที่เริ่มกิจกรรม</label>
          <input type="date" id="start_date" name="start_date"
              min="2019-05" value="2018-05">
        </div>
        <div class="form-group">
          <label for="usr">วันสิ้นสุดกิจกรรม</label>
          <input type="date" id="final_date" name="final_date"
              min="2019-05" value="2018-05">
        </div>
        <div class="form-group">
          <label for="usr">เวลาที่เริ่ม</label>
          <input type="time" class="form-control col-3" id="start_time" name="start_time">
          <label for="usr">เวลาที่เริ่ม</label>
          <input type="time" class="form-control col-3" id="final_time" name="final_time">
        </div>

        <div class="form-group">
          <label for="year">ปีการศึกษา</label>
          <input type="text" class="form-control col-5" id="school_year"  name="school_year">
        </div>

        <div class="form-group">
          <label for="term">เทอม</label>
          <select class="form-control col-2" id="term" name="term">
            <option>1</option>
            <option>2</option>
            <option>3</option>
          </select>
        </div>
      
        <div class="form-group">
          <label for="term" name="year">ชั้นปีที่เข้ารวม</label>
        <label class="checkbox-inline" id="year" name="year" ><input type="checkbox" value="">ปี 1</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 2</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 3</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 4</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 5</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 6</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 7</label>
        <label class="checkbox-inline" id="year" name="year"><input type="checkbox" value="">ปี 8</label>
        </div>


        
        <button type="submit" class="btn btn-primary btn-md col-5">บันทึก</button>
        </form>
    </div>
  </div>
</div>

  