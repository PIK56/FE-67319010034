<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Register</title>
    <link rel="stylesheet" href="style.css">
    <script src="func.js"></script>
</head>
<body> 
 
    
    <div class="container"> 
         <div class="select_opt">
                <button onclick="stdForm()">นักเรียน</button>
                <button onclick="teaForm()">ครู</button>
                <button onclick="regForm()">สมัครสมาชิก</button>
         </div>
         <div class ="form-1 unhide" id="stdForm">
            <form action="auth.php" method="get">
                
                <p>ฟรอมช่าง</p>
                <input type="text" name="username" placeholder="ชื่อคนใช้"id="">
                <br>
                <input type="text" name="username" placeholder="รหัสผ่าน"id="">
                <br>
                <input type="submit" value="ลงชื่อเข้าใช้" >
            </form>
         </div>

    </div>
    <div class ="form-2 hide"id="teaForm">
            <form action="auth.php" method="get">
                <p>ฟรอมช่างแบบตึง</p>
                <input type="text" name="username" placeholder="ชื่อฟรอมช่าง"id="">
                <br>
                <input type="text" name="username" placeholder="รหัสผ่าน"id="">
                <br>
                <input type="submit" value="ลงชื่อเข้าใช้" >
            </form>
         </div>
         <div class ="form-3 hide"id="regForm">
            <form action="auth.php" method="get">
                <p>ฟรอมช่างแบบตึงอีหลี</p>
                
                <input type="text" name="username" placeholder="ชื่อฟรอมช่างแบบตึง"id="">
                <br>
                <input type="radio" name="gender" value ="ชาย">ชาย
                <input type="radio" name="gender" value ="หญิง">หญิง
                <br>
                <input type="number"name="age" min="1" max="100">
                <br>
                <input type="text" name="username" placeholder="ไม่บอก"id="">
                <br>

                <input type="text" name="username" placeholder="รหัสผ่าน"id="">
                <br>
                <input type="text" name="username" placeholder="รหัสผ่านสำรอง"id="">
                <br>>
                <input type="submit" value="ลงชื่อเข้าใช้" >
            </form>
         </div>
</body>
</html>