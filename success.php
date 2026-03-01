<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Success - Mehwarco</title>
    <link rel="shortcut icon" href="assets/dist/images/favicon.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome-free/css/all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <style>
        body {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 20px;
        }
        .success-card {
            background: #fff;
            border-radius: 20px;
            padding: 50px 40px;
            max-width: 550px;
            width: 100%;
            text-align: center;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            animation: fadeInUp 0.6s ease-out;
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .success-icon {
            width: 100px;
            height: 100px;
            background: linear-gradient(135deg, #D2AA5A, #e8c97a);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            animation: scaleIn 0.5s ease-out 0.3s both;
        }
        @keyframes scaleIn {
            from { transform: scale(0); }
            to { transform: scale(1); }
        }
        .success-icon i {
            font-size: 50px;
            color: #fff;
        }
        .success-card h2 {
            color: #333;
            font-weight: 700;
            margin-bottom: 15px;
            font-size: 28px;
        }
        .success-card p {
            color: #666;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 10px;
        }
        .success-card .subtitle {
            color: #999;
            font-size: 14px;
        }
        .btn-home {
            display: inline-block;
            margin-top: 30px;
            padding: 14px 40px;
            background: linear-gradient(135deg, #D2AA5A, #e8c97a);
            color: #fff;
            font-size: 16px;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 5px 20px rgba(210, 170, 90, 0.4);
        }
        .btn-home:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(210, 170, 90, 0.5);
            color: #fff;
            text-decoration: none;
        }
        .logo {
            color: #D2AA5A;
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 30px;
            letter-spacing: 2px;
        }
    </style>
</head>

<body>
    <div class="success-card">
        <div class="logo">MEHWARCO</div>
        <div class="success-icon">
            <i class="fas fa-check"></i>
        </div>
        <?php
        $type = isset($_GET['type']) ? $_GET['type'] : 'contact';
        if ($type === 'join') {
        ?>
            <h2>Application Submitted!</h2>
            <p>Thank you for your interest in joining the Mehwarco team. Your application has been received successfully.</p>
            <p>Our team will carefully review your application and get in touch with you if your profile matches our requirements.</p>
        <?php } else { ?>
            <h2>Message Sent Successfully!</h2>
            <p>Thank you for reaching out to us. We have received your message and our team will review it shortly.</p>
            <p>We will get back to you as soon as possible.</p>
        <?php } ?>
        <p class="subtitle">A confirmation email has been sent to your inbox.</p>
        <a href="index.php" class="btn-home"><i class="fas fa-home" style="margin-right: 8px;"></i>Return to Home Page</a>
    </div>
</body>

</html>
