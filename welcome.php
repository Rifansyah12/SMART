<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Uninus</title>
  <style>
    * {
      box-sizing: border-box;
    }

    html, body {
      margin: 0;
      padding: 0;
      height: 100%;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #1a2980 0%, #26d0ce 100%);
      color: #fff;
    }

    body {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
    }

    .content {
      flex: 1;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    h1 {
      font-size: 2.8em;
      margin-bottom: 15px;
      font-weight: 300;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    p {
      font-size: 1.2em;
      margin-bottom: 30px;
      max-width: 500px;
    }

    .btn-container {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 20px;
      width: 100%;
      max-width: 600px;
    }

    .btn {
      flex: 1 1 calc(50% - 20px);
      min-width: 140px;
      padding: 15px;
      font-size: 14px;
      background: rgba(255,255,255,0.15);
      color: white;
      border: 1px solid rgba(255,255,255,0.2);
      border-radius: 8px;
      cursor: pointer;
      transition: all 0.3s ease;
      text-decoration: none;
      text-align: center;
      backdrop-filter: blur(5px);
      font-weight: 500;
      letter-spacing: 0.5px;
    }

    .btn:hover {
      background: rgba(255,255,255,0.25);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    .animate-fade {
      animation: fadeIn 0.8s ease-out forwards;
    }

    .footer {
      font-size: 0.9em;
      color: #e0e0e0;
      padding: 15px;
      text-align: center;
    }

    @media (max-width: 600px) {
      h1 {
        font-size: 2em;
      }

      p {
        font-size: 1em;
        margin-bottom: 20px;
      }

      .btn-container {
        flex-direction: column;
        gap: 12px;
      }

      .btn {
        flex: none;
        width: 100%;
        min-width: auto;
      }

      .footer {
        font-size: 0.8em;
      }
    }
  </style>
</head>
<body>
  <div class="content">
    <h1 class="animate-fade">Smart Uninus</h1>
    <p class="animate-fade">A unified platform to monitor and manage innovative smart campus solutions</p>

    <div class="btn-container">
      <a class="btn" href="login_trash.php">Trash</a>
      <a class="btn" href="login_smart_house.php">Smart House</a>
      <a class="btn" href="login.php">Smart Nose</a>
      <a class="btn" href="login_smart_parking.php">Smart Parking</a>
      <a class="btn" href="login_green_park.php">Green Park</a>
      <a class="btn" href="login_plts.php">PLTS</a>
    </div>
  </div>

  <div class="footer">
    &copy; 2023 Smart Universitas Islam Nusantara 2025
  </div>
</body>
</html>
