<!DOCTYPE html>
<html lang="en">


<head>
    <!-- Title and Discription start -->
    <meta charset="UTF-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Submission Failed!</title>
    <link rel="icon" href="assets/images/logo/feb-icon.png" type="image/x-icon">
    <meta name="description"
        content="Oops! Something went wrong. Please try again later or contact us directly.">

    <meta name="Keywords" content="Here you type your SEO content..... Key like.......">

    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 day">
    <meta name="language" content="English">
    <meta name="generator" content="N/A">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Pragma" content="no-cache" />
    <!-- Title and Discription close -->


    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500;600;700&amp;family=Roboto:wght@400;700&amp;display=swap">
    <link rel="stylesheet" href="../../../use.fontawesome.com/releases/v5.15.1/css/all.css">
    <link rel="stylesheet" href="assets/css/libraries.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/all.css">
    <link rel="stylesheet" href="assets/css/all-2.css">

    <style>
		.success {
			text-align: center;
			margin: auto;
			background-color: gray;
			color: black;
		}

		.successful {
			text-align: center;
			margin: auto;
			padding: 35px 50px 20px 50px;
			font-size: 50px !important;
			color: black;
		}

	       .color-failed{
            		color: red;
      		}

		.imgg {
			max-width: 100%;
		}

		.img-size {
			width: 100px;
			height: 100px;
			margin: auto;
			margin-top: 25px;
			margin-bottom: -20px;
		}
        .text-black{
            padding-bottom: 30px;
        }

		.pp {
			text-align: center;
		}

		@media (max-width: 576px) {
			/* Extra small devices (phones) */
			.successful {
				font-size: 20px !important;
			}
		}
	</style>
</head>

<body>
    <div class="wrapper">

        <!-- =========================
        Header
    =========================== -->
        <!-- Header Pages -->
        <?php include 'header.php'; ?>
        <!-- Header Pages -->

        <!-- ========================
       page title 
    =========================== -->
        <section class="page-title page-title-layout5">
            <div class="bg-img"><img src="assets/images/backgrounds/6.jpg" alt="background"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="pagetitle__heading text-black">Failed</h1>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Failed</li>
                            </ol>
                        </nav>
                    </div><!-- /.col-12 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.page-title -->


        <div class="container pt-5 pb-4">
				<div class="img-size">
					<img class="imgg" src="assets/images/other/failed.png" />
				</div>
				<div class="successful text-black">
					Your Email Has Not Send!
				</div>
				<div class="pp text-black">Something went <span class="color-failed">wrong</span> please try again after sometime.</div>

			</div>


        <!-- ========================
      Footer
    ========================== -->
        <!-- Footer Pages -->
        <?php include 'footer.php'; ?>
        <!-- Footer Pages -->