<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        
        <nav class="navbar justify-content-center text-light bg-dark">
            <div class="fs-3">ข้อมูลสถิติของห้องสมุด</div>
        </nav>

        <?php  
            include("connect.php");
            $qMember = $conn->query("SELECT * FROM tb_member");
            $rMember = $qMember->num_rows;

            $qborrowAll = $conn->query("SELECT * FROM tb_borrow_book");
            $rborrowAll = $qborrowAll->num_rows;

            $qBook = $conn->query('SELECT * FROM tb_book');
            $rBook = $qBook->num_rows;

            $qborrow = $conn->query("SELECT * FROM tb_borrow_book WHERE br_date_rt = '0000-00-00'");
            $rborrow = $qborrow->num_rows;
        ?>

        <div class="row">
            <div class="col-5 mx-5 my-3">
                <div class="card">
                    <div class="card-header">
                        หนังสือทั้งหมด (เล่ม)
                    </div>
                    <div class="card-body">
                        <div class="fs-1 text-center"><?php echo $rBook ?></div>
                    </div>
                </div>
            </div>
            <div class="col-5 mx-5 my-3">
                <div class="card">
                    <div class="card-header">
                        การใช้บริการยืม - คืน (ครั้ง)
                    </div>
                    <div class="card-body">
                        <div class="fs-1 text-center"><?php echo $rborrowAll ?></div>
                    </div>
                </div>
            </div>

            <div class="col-5 mx-5 my-3">
                <div class="card">
                    <div class="card-header">
                        สมาชิกทั้งหมด (คน)
                    </div>
                    <div class="card-body">
                        <div class="fs-1 text-center"><?php echo $rMember ?></div>
                    </div>
                </div>
            </div>

            <div class="col-5 mx-5 my-3">
                <div class="card">
                    <div class="card-header">
                        หนังสือค้างส่ง
                    </div>
                    <div class="card-body">
                        <div class="fs-1 text-center"><?php echo $rborrow ?></div>
                    </div>
                </div>
            </div>
            
        </div>
        

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
