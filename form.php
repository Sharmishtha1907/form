<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            background-image: url(https://images.saymedia-content.com/.image/t_share/MTkzOTUzODU0MDkyODc5MzY1/particlesjs-examples.gif);
            background-size: cover;
        }

        .neonTextPurple {
            color:purple;
            text-shadow:
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 21px #fff,
                0 0 42px #0fa,
                0 0 82px #0fa,
                0 0 92px #0fa,
                0 0 102px #0fa,
                0 0 151px #0fa;
        }
        .neonTextMaroon {
            color:maroon;
            text-shadow:
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 21px #fff,
                0 0 42px #0fa,
                0 0 82px #0fa,
                0 0 92px #0fa,
                0 0 102px #0fa,
                0 0 151px #0fa;
        }
        .neonText {
            color:black;
            font-weight: bold;
            text-shadow:
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 21px #fff,
                0 0 42px #0fa,
                0 0 82px #0fa,
                0 0 92px #0fa,
                0 0 102px #0fa,
                0 0 151px #0fa;
        }
        .button {
        background-color: #6495ED;
        -webkit-border-radius: 60px;
        border-radius: 60px;
        border: none;
        color: black;
        cursor: pointer;
        display: inline-block;
        font-family: sans-serif;
        font-size: 20px;
        padding: 5px 15px;
        text-align: center;
        text-decoration: none;
      }
      @keyframes glowing {
        0% {
          background-color: #7DF9FF;
          box-shadow: 0 0 5px #7DF9FF;
        }
        50% {
          background-color: #00FFFF;
          box-shadow: 0 0 20px #00FFFF;
        }
        100% {
          background-color: #7DF9FF;
          box-shadow: 0 0 5px #7DF9FF;
        }
      }
      .button {
        animation: glowing 1300ms infinite;
      }
    </style>

</head>

<body align="center">
    <h1 class="neonTextPurple">Personal Form</h1>
    <div class="container-fluid">
        <form action="formm.php" method="POST">
            <fieldset>
                <legend align="left" class="neonTextMaroon">Personal Information</legend>
                <label for="name" class="neonText">Name</label>
                <input type="text" name="name" placeholder="Full Name">
                <br>
                <br>
                <label for="age"class="neonText">Age</label>
                <input type="number" name="age" placeholder="18+" min="18">
                <br>
                <br>
                <label for="gender" class="neonText">Gender</label>
                <select name="gender">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Others">Others</option>
                    <option value="Rather Not Say">Rather Not Say</option>
                </select>
            </fieldset>
            <br>
            <br>
            <fieldset>
                <legend align="left" class="neonTextMaroon">Details</legend>
                <label for="branch" class="neonText">Branch</label>
                <select name="branch">
                    <option value="CSE">CSE</option>
                    <option value="ECE">ECE</option>
                    <option value="ME">ME</option>
                    <option value="CST">CST</option>
                    <option value="CE">CE</option>
                    <option value="AI&DS">AI&DS</option>
                </select>
                <br>
                <br>
                <label for="email" class="neonText">Email</label>
                <input type="email" name="email">
            </fieldset>
            <br>
            <br>
            <input type="submit" name="submit" value="submit" class="button">
        </form>

    </div>

</body>

</html>