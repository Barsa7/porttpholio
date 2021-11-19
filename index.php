<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="form">
        <form>
            <input type="text">
            <input type="password">
            <button>Login</button>
        </form>
    </section>
    <section class="profile">
        <h1>Барсбек </h1>
        <ul>
            <li>barsbek@gmail.com</li>
            <li>0706048466</li>
        </ul>
        <img style="width:100px;height: 100px;border-radius: 50%;object-fit: cover;" src="https://mooscle.com/app/uploads/2021/11/imagine.jpeg" alt="">
        <ul>
            <li><a href="">Инстаграм</a></li>
            <li><a href="">Фейсбук</a></li>
            <li><a href="">Тикток</a></li>
        </ul>
    </section>

    <script>
        const form = document.querySelector('form');
        const formSection = document.querySelector('.form');
        const profile = document.querySelector('.profile');
        profile.style.display = 'none';
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            formSection.style.display = 'none';
            profile.style.display = 'block';
        });
    </script>
</body>
</html>
