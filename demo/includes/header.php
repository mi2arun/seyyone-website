<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Seyyone - IT solutions for a growing businesses.">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.jpg">
    <title>Seyyone - IT solutions for a growing businesses</title>
    <link rel="stylesheet preload" href="assets/css/vendor/bootstrap.min.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="assets/css/plugins/fontawesome.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="assets/css/plugins/magnifying-popup.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="assets/css/plugins/swiper.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="assets/css/plugins/metismenu.css" as="style" media="print" onload="this.media='all'">
    <link rel="stylesheet preload" href="assets/css/style.css" as="style">
</head>

<body>
<?php
// Determine which page we're on
$current_page = basename($_SERVER['PHP_SELF']);

// Define the menu structure once
function get_menu_items() {
    return [
        [
            'title' => 'Home',
            'url' => '#',
            'has_dropdown' => true,
            'submenu' => [
                ['title' => 'Home', 'url' => 'index.php']
            ]
        ],
       /* [
            'title' => 'Company',
            'url' => '#',
            'has_dropdown' => true,
            'submenu' => [
              ['title' => 'About Company', 'url' => 'company.php']
          ]
        ],*/
        [
            'title' => 'What we do',
            'url' => 'service.html',
            'has_dropdown' => true,
            'megamenu' => true,
            'submenu' => [
                [
                    'column' => [
                        [
                            'title' => 'Healthcare KPO',
                            'url' => 'healthindex.php',
                            'icon' => 'assets/images/service/icons/22.svg',
                            'description' => 'Moving data to cloud infrastructure.'
                        ]
                    ]
                ],
                [
                    'column' => [
                        [
                            'title' => 'Software',
                            'url' => 'softindex.php',
                            'icon' => 'assets/images/service/icons/25.svg',
                            'description' => 'Empowering, innovative, transformative.'
                        ]
                    ]
                ]
            ]
        ],
      /*  [
            'title' => 'Blog',
            'url' => '#',
            'has_dropdown' => false,
            'submenu' => [
                
            ]
        ],*/
        [
            'title' => 'Join Us',
            'url' => '#',
            'has_dropdown' => true,
            'submenu' => [
                ['title' => 'Career', 'url' => '#'],
                ['title' => 'Open Positions', 'url' => '#'],
            ]
        ],
       // Change this section in the get_menu_items() function
[
    'title' => 'Insights',
    'url' => '#',
    'has_dropdown' => true,
    'submenu' => [
        ['title' => 'Blogs', 'url' => 'blogs.php'],
        ['title' => 'Articles', 'url' => 'articles.php'],
        ['title' => 'Infographics', 'url' => 'infographics.php'],
        ['title' => 'Case Study', 'url' => 'case-study.php']
    ]
],

        [
            'title' => 'Contact',
            'url' => 'contact.php',
            'has_dropdown' => false
        ]
    ];
}

// Function to render the menu
function render_menu($items) {
    $html = '<ul>';
    
    foreach ($items as $item) {
        $dropdown_class = $item['has_dropdown'] ? 'has-dropdown' : '';
        $megamenu_class = isset($item['megamenu']) && $item['megamenu'] ? 'position-static with-megamenu' : '';
        
        $html .= '<li class="' . $dropdown_class . ' ' . $megamenu_class . '">';
        $html .= '<a class="nav-link" href="' . $item['url'] . '">';
        $html .= $item['title'];
        
      
        
        $html .= '</a>';
        
        // Render submenu if exists
        if ($item['has_dropdown']) {
            if (isset($item['megamenu']) && $item['megamenu']) {
                // Render megamenu
                $html .= '<div class="submenu">';
                $html .= '<div class="container"><div class="row">';
                
                foreach ($item['submenu'] as $column) {
                    $html .= '<div class="col-lg-3">';
                    $html .= '<ul class="single-menu parent-nav">';
                    
                    foreach ($column['column'] as $subitem) {
                        $html .= '<li>';
                        $html .= '<a class="single-service-area-wrapper" href="' . $subitem['url'] . '">';
                        $html .= '<div class="icon">';
                        $html .= '<img src="' . $subitem['icon'] . '" alt="service">';
                        $html .= '</div>';
                        $html .= '<div class="info">';
                        $html .= '<h4 class="title">' . $subitem['title'] . '</h4>';
                        $html .= '<p>' . $subitem['description'] . '</p>';
                        $html .= '</div>';
                        $html .= '</a>';
                        $html .= '</li>';
                    }
                    
                    $html .= '</ul>';
                    $html .= '</div>';
                }
                
                $html .= '</div></div>';
                $html .= '</div>';
            } else {
                // Render regular dropdown
                $html .= '<ul class="submenu parent-nav with-border">';
                
                foreach ($item['submenu'] as $subitem) {
                    $html .= '<li><a href="' . $subitem['url'] . '"><i class="fa-sharp fa-regular fa-chevron-right"></i>' . $subitem['title'] . '</a></li>';
                }
                
                $html .= '</ul>';
            }
        }
        
        $html .= '</li>';
    }
    
    $html .= '</ul>';
    return $html;
}

// Get the menu items
$menu_items = get_menu_items();

 
    // Contact page and Company page header style
    ?>
    <header class="header-style-one border-bottm">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-wrapper-1">
                        <a href="index.php" class="logo-area">
                            <img width="180" height="50" src="assets/images/logo/logo-blue.png" alt="logo">
                        </a>
                        <div class="nav-area">
                            <nav>
                                <?php echo render_menu($menu_items); ?>
                            </nav>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </header>
    <header class="header-style-one header--sticky">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-wrapper-1">
                        <a href="index.php" class="logo-area">
                            <!--<img  src="assets/images/logo/logo-light.png" alt="logo">-->
                            <img width="180" height="60" src="assets/images/logo/logo-blue.png" alt="logo">
                        </a>
                        <div class="nav-area">
                            <nav>
                                <?php echo render_menu($menu_items); ?>
                            </nav>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <?php
 
?>
