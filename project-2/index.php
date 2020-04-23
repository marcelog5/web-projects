<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
    <meta name="author" content="marcelog5"/>
    <meta name="keywords" content="site,dogs"/>
    <meta name="description" content="project-2"/>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="<?php echo INCLUDE_PATH;?>css/style.css" rel="stylesheet"/>
    <title>project-2</title>
</head>
<body>
    
    <header>
        <div class="container">
            <div class="logo">
                <h2>Meu WebSite</h2>
            </div><!--logo-->

            <nav class="menu-desktop">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>about">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contact">Contato</a></li>
                </ul>
            </nav><!--menu-desktop-->

            <nav class="menu-mobile">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH;?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>about">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>services">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH;?>contact">Contato</a></li>
                </ul>
            </nav><!--menu-mobile-->
        </div><!--container-->
        <div class="clear"></div><!--clear-->
    </header>

    <section class="form-bg">
        <div class="overlay"></div><!--overlay-->
        
        <div class="container">
            <div class="form-wraper">
                <h2>Qual o seu melhor e-mail?</h2>
            
                <form>
                    <input required type="email" name="email"/>

                    <input type="submit" name="acao" value="Cadastrar"/>
                </form>
            </div><!--form-wraper-->
        </div><!--container-->
    </section><!--form-bg-->

    <section class="about">
        <div class="container">
            <div class="w50 about-infor">
                <h2>Lorem ipsum dolor</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                    ullamcorper in odio ut, egestas tincidunt magna. 
                    In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                    tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                    fringilla est dapibus.In imperdiet placerat justo quis porttitor. 
                    Integer a tortor nulla. Ut et hendrerit est. Etiam fringilla neque ut 
                    augue pellentesque pellentesque. Nulla pretium blandit eleifend. Cras tincidunt, 
                    libero in vehicula pellentesque, sem ante rhoncus libero, 
                    in congue odio felis volutpat leo. Aliquam eu eros luctus, auctor est sit amet, 
                    laoreet leo. Donec nisl ante, consequat in libero sed, tempor tristique felis. 
                    In eleifend magna quis porttitor iaculis.
                </p>
                    
                <p>
                    In imperdiet placerat justo quis porttitor. 
                    Integer a tortor nulla. Ut et hendrerit est. Etiam fringilla neque ut 
                    augue pellentesque pellentesque. Nulla pretium blandit eleifend. Cras tincidunt, 
                    libero in vehicula pellentesque, sem ante rhoncus libero, 
                    in congue odio felis volutpat leo. Aliquam eu eros luctus, auctor est sit amet, 
                    laoreet leo. Donec nisl ante, consequat in libero sed, tempor tristique felis. 
                    In eleifend magna quis porttitor iaculis.
                </p>
            </div><!--about-infor-->

            <div class="w50 img-wraper">
                <img src="<?php echo INCLUDE_PATH;?>images/dogao.jpeg"/>
            </div><!--img-wraper-->
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </section><!--about-->

    <section class="specialties">
        <div class="container">
            <h2>Minha especialidades</h2>

            <div class="technology-wraper">
                <div class="technology-logo"></div>

                <h2>CSS3</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                    ullamcorper in odio ut, egestas tincidunt magna. 
                    In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                    tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                    fringilla est dapibus. In imperdiet placerat justo quis porttitor. 
                    Integer a tortor nulla. Ut et hendrerit est. Etiam fringilla neque ut 
                    augue pellentesque pellentesque. 
                </p>
            </div><!--technology-wraper-->

            <div class="technology-wraper">
                <div class="technology-logo"></div>

                <h2>HTML5</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                    ullamcorper in odio ut, egestas tincidunt magna. 
                    In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                    tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                    fringilla est dapibus. In imperdiet placerat justo quis porttitor. 
                    Integer a tortor nulla. Ut et hendrerit est. Etiam fringilla neque ut 
                    augue pellentesque pellentesque. 
                </p>
            </div><!--technology-wraper-->

            <div class="technology-wraper">
                <div class="technology-logo"></div>

                <h2>JavaScript</h2>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                    ullamcorper in odio ut, egestas tincidunt magna. 
                    In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                    tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                    fringilla est dapibus. In imperdiet placerat justo quis porttitor. 
                    Integer a tortor nulla. Ut et hendrerit est. Etiam fringilla neque ut 
                    augue pellentesque pellentesque. 
                </p>
            </div><!--technology-wraper-->
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </section><!--specialties-->

    <section class="testimony-services">
        <div class="container">
            <div class="testimony w50">
                <h2>Depoimento dos nossos clientes</h2>

                <div class="testimony-single">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                        tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                        fringilla est dapibus. In imperdiet placerat justo quis porttitor. 
                    </p>

                    <h2>Lorem Ipsum</h2>
                </div><!--testimony-single-->

                <div class="testimony-single">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus. Nunc massa enim, facilisis ut mauris id, 
                        tempor volutpat elit. Sed efficitur quam vitae ex euismod, eu 
                        fringilla est dapibus. In imperdiet placerat justo quis porttitor. 
                    </p>

                    <h2>Lorem Ipsum</h2>
                </div><!--testimony-single-->
            </div><!--testimony-->

            <div class="services w50">
                <h2>Serviços</h2>

                <ul>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus.
                    </li>
                    <li>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer enim arcu,
                        ullamcorper in odio ut, egestas tincidunt magna. 
                        In vitae venenatis lectus.
                    </li>
                </ul>
            </div><!--services-->
            <div class="clear"></div><!--clear-->
        </div><!--container-->
    </section><!--testimony-services-->

    <footer>
        <div class="container">
            <p>Todos os direitos reservados</p>
        </div><!--container-->
    </footer>

    <script src="<?php echo INCLUDE_PATH;?>js/jquery-3.5.0.min.js"></script>
    <script src="<?php echo INCLUDE_PATH;?>js/scripts.js"></script>

</body>
</html>
