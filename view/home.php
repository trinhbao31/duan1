<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="view/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <main class="f">
        <div class="container ">
            <div class="row">
                <?php for ($i = 0; $i < 12; $i++): ?>

                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="card mb-4 shadow p-3 bg-body-tertiary rounded">
                            <img src="https://assets.adidas.com/images/w_383,h_383,f_auto,q_auto,fl_lossy,c_fill,g_auto/0b2771c6f8e34df9bffc5a4b23246ab9_9366/giay-golf-traxion-lite-boa-24.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Giày adidas</h5>
                                <div class="f">
                                    <p class="card-text text-danger t-b">120000.đ</p>
                                    <p class="card-text "><del>150000.đ</del></p>
                                </div>
                                <a href="#" class="btn btn-danger text-center w-100">Xem chi tiết</a>
                            </div>
                        </div>
                    </div>

                <?php endfor; ?>
            </div>

        </div>
        <div class="aside w-20 me-10 ">
            <div class="shadow  bg-body-tertiary rounded mb-4">
                <h4 class="text-center text-white bg-dark p-3">Danh mục</h4>
            </div>
            <ul class="list-group list-group-flush shadow p-3 bg-body-tertiary rounded">
                <li class="list-group-item"><a href="" class="ps-10 a">Giày adidas 2024</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">Giày adidas nam </a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
                <li class="list-group-item"><a href="" class="ps-10 a">And a fifth one</a></li>
            </ul>
        </div>
    </main>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>