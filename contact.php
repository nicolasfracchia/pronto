<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="images/favicon.png">
    <title>Pronto - Pizza & Pasta</title>
    <link rel="stylesheet" href="styles/interns.css" />
    <link rel="stylesheet" href="styles/contact.css" />
</head>
<body>
    <?php include_once('header.php'); ?>
    <main class='section_contact'>
        <h1>Get in touch</h1>
        <form action="#" method='post'>
            <input type='text' name='fullname' placeholder='Full name *' required />
            <input type='text' name='email' placeholder='Email *' required />
            <input type='text' name='phone' placeholder='Contact number *' required />
            <textarea name='message' placeholder='Message *' required></textarea>
            <button>Send</button>
        </form>
        <ul>
            <li>
                <label>Email:</label>
                <a href='mailto:info@yycpronto.com'>info@yycpronto.com</a>
            </li>
            <li>
                <label>Phone:</label>
                <a href='tel:4039939093'>(403) 993-9093</a>
            </li>
            <li>
                <label>Address:</label>
                <a href='https://maps.google.com/maps?ll=51.04841,-114.074235&z=17&t=m&hl=en&gl=CA&mapclient=embed&cid=5598572348617200762' target='_blank'>605 5 Ave SW, Calgary, AB T2P 1E5</a>
            </li>
            <li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d627.0633364349907!2d-114.0752715562863!3d51.04840970000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53716fe4b75b9d07%3A0x4db21fe378a7147a!2sPronto%20Pizza-Pasta!5e0!3m2!1sen!2sca!4v1672015983027!5m2!1sen!2sca" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </li>
        </ul>
    </main>
    <?php include_once('footer.php'); ?>
</body>
</html>