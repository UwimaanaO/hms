<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Admin Page</title>
  @include('admin.css')
  <style>
    label{
      display: inline-block;
      width: 200px;
    }
    input{
      width: 200px;
    }
  </style>
</head>

<body>
  <div class="container-scroller">
    <!-- include nav bar page -->
    @include('admin.sidebar')
    <!-- include nav bar -->
    @include('admin.navbar')
    <!-- incude body-->
    <div class="container-fluid page-body-wrapper">
      <div class="container" align="center" style="padding-top: 100px">
        <form action="">
          @csrf
          <div style="padding: 15px">
            <label for="">Doctor's Name</label>
            <input type="text" name="name" placeholder="Enter Doctor's Name" style="color: black">
          </div>
          <div style="padding: 15px">
            <label for="">Phone Numebr</label>
            <input type="text" name="phone" placeholder="Enter Doctor's Phone Number" style="color: black">
          </div>
          <div style="padding: 15px">
            <label for="">Doctor's Speciality</label>
            <select name="speciality" id="" style="width: 200px">
              <option value="">--Select--</option>
              <option value="Primary Care">Primary Care</option>
              <option value="Pediatrics">Pediatrics</option>
              <option value="Obstetrics and Gynecology (OB/GYN)">Obstetrics and Gynecology (OB/GYN)</option>
              <option value="Dermatology">Dermatology</option>
              <option value="Psychiatry">Psychiatry</option>
              <option value="Neurology">Neurology</option>
              <option value="Cardiology">Cardiology</option>
              <option value="Endocrinology">Endocrinology</option>
              <option value="Gastroenterology">Gastroenterology</option>
              <option value="Nephrology">Nephrology</option>
              <option value="Pulmonology">Pulmonology</option>
              <option value="Rheumatology">Rheumatology</option>
              <option value="Hematology">Hematology</option>
              <option value="Oncology">Oncology</option>
            </select>
          </div>
          <div style="padding: 15px">
            <label for="">Room Numebr</label>
            <input type="text" name="room" placeholder="Enter Doctor's Room Number" style="color: black">
          </div>
          <div style="padding: 15px">
            <label for="">Doctor's Photo</label>
            <input type="file" name="photo">
          </div>
          <div style="padding: 15px">
            <input type="submit" class="btn btn-success">
          </div>

        </form>
      </div>
    </div>
  </div>
  @include('admin.script')
</body>

</html>