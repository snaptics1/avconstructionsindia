<section>
    <div class="page-section-bar">
        
        <img src="assets/img/bg/ab.svg" alt="">
    </div>
</section>



<section class="about-section">
  <div class="container">
    <div class="about-wrapper">
      <div class="about-image">
        <img src="assets/img/about/01.svg" alt="Modern Property Image" />
      </div>
      <div class="about-content">
        <h2>About Us</h2>
        <h3>Building the Future, Today.</h3>
        <p>
          At AV Constructions, we combine innovation, expertise, and precision to create modern living spaces with world-class facilities. With a strong foundation in architectural excellence, we focus on crafting projects that cater to the evolving needs of our customers.
<br> <br> 
Every detail, from design to delivery, is meticulously planned to ensure top-notch quality and comfort. As a leading name in real estate, our commitment is to redefine lifestyles with sustainable, elegant, and thoughtfully designed spaces.
        </p>
      </div>
    </div>
  </div>
</section>


<div class="container">
    <section id="experience">
        <div class="counter-wrapper">
        
            <div class="counter-item">
            <span id="experience-years" class="counter">0</span><span class="symbol">+</span>
            <p>Years of Building Experience</p>
            </div>
            <div class="counter-item">
            <span id="projects-completed" class="counter">0</span><span class="symbol">+</span>
            <p>Completed Projects</p>
            </div>

            <div class="counter-item">
            <span id="projects-under-development" class="counter">0</span><span class="symbol">+</span>
            <p>Projects Under Development</p>
            </div>
        </div>
    </section>
</div>




<section class="about-section">
  <div class="container">
    <div class="about-wrapper">
     
      <div class="about-content">
        <h2>About</h2>
        <h3>MD. JAKKA VENKAT REDDY</h3>
        <p>
        Our team is our most valuable resource and the main reason for our success. I have been blessed to have the quality of people surrounding me and our company that I can also refer to as family. One of the keys to our success is empowering transparency on all levels. I realize that without input we will not be able to achieve our goals both professionally and personally. In proclaiming 2004 as the year of efficiency, no opinion will be left unheard on achieving just that. We continue to grow strong as a team and we strive to become more unified. We are constantly seeking out new relationship where we can continue to surround ourselves with the caliber of people that help us make a difference. As a company we value our employees, value each other, and want to make sure we all feel appreciated, included, and empowered. We are always actively searching for additional team members that share our same philosophies.
        </p>
      </div>
      <div class="about-image">
        <img src="assets/img/about/02.svg" alt="Modern Property Image" />
      </div>
    </div>
  </div>
</section>


<?php
// Mission and Vision Data
$mission = "Our mission is to create world-class spaces that combine modern architecture, sustainable practices, and customer-centric designs. We strive to redefine real estate by delivering exceptional quality and value to our customers.";

$vision = "To be a leading name in the construction and real estate industry, known for transforming lifestyles through innovation, sustainability, and excellence. Our vision is to set new benchmarks in building modern living and commercial spaces.";

// Core Values
$coreValues = [
    [
        'title' => 'Integrity',
        'description' => 'Upholding honesty and transparency in every project we undertake.',
        'color' => 'blue'
    ],
    [
        'title' => 'Excellence', 
        'description' => 'Delivering unmatched quality through meticulous planning and execution.',
        'color' => 'green'
    ],
    [
        'title' => 'Innovation',
        'description' => 'Embracing creativity to design unique and modern spaces.',
        'color' => 'purple'
    ],
    [
        'title' => 'Sustainability',
        'description' => 'Incorporating eco-friendly practices for a better future.',
        'color' => 'yellow'
    ],
    [
    'title' => 'Collaboration',
    'description' => 'Fostering teamwork and building strong partnerships with clients, partners, and communities to achieve exceptional results.',
    'color' => 'indigo'
],
    [
        'title' => 'Customer Focus',
        'description' => 'Ensuring customer satisfaction through personalized solutions and dedicated service.',
        'color' => 'red'
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-16 px-4">
        <!-- Mission and Vision Boxes -->
        <div class="grid md:grid-cols-2 gap-8 mb-16">
            <!-- Mission Box -->
            <div class="bg-white shadow-lg rounded-lg p-8 transform transition hover:scale-105 hover:shadow-xl">
                <div class="flex items-center mb-6">
                   
                    <h2 class="text-3xl font-bold text-gray-800">Mission</h2>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    <?php echo htmlspecialchars($mission); ?>
                </p>
            </div>

            <!-- Vision Box -->
            <div class="bg-white shadow-lg rounded-lg p-8 transform transition hover:scale-105 hover:shadow-xl">
                <div class="flex items-center mb-6">
                  
                    <h2 class="text-3xl font-bold text-gray-800">Vision</h2>
                </div>
                <p class="text-gray-600 leading-relaxed">
                    <?php echo htmlspecialchars($vision); ?>
                </p>
            </div>
        </div>

        <!-- Core Values -->
        <div class="bg-white shadow-lg rounded-lg p-8">
            <div class="flex items-center mb-8">
            
            
                <h2 class="text-3xl font-bold text-gray-800">Core Values</h2>
            </div>
            <div class="grid md:grid-cols-3 gap-6">
                <?php foreach ($coreValues as $value): ?>
                    <div class="bg-<?php echo $value['color']; ?>-50 p-6 rounded-lg transform transition hover:scale-105 hover:shadow-md">
                        <h3 class="text-xl font-semibold text-<?php echo $value['color']; ?>-800 mb-4"><?php echo htmlspecialchars($value['title']); ?></h3>
                        <p class="text-gray-700"><?php echo htmlspecialchars($value['description']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</body>
</html>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Define counters and their target values
    const counters = [
      { id: "projects-completed", targetValue: 30, duration: 2000 }, // Completed Projects
      { id: "experience-years", targetValue: 25, duration: 2000 },   // Years of Building Experience
      { id: "projects-under-development", targetValue: 10, duration: 2000 } // Projects Under Development
    ];

    let hasAnimated = false; // To ensure the animation runs only once

    // Function to animate each counter
    function animateCounter(counterElement, targetValue, duration) {
      const startValue = 0;
      const startTime = performance.now();

      function updateCounter(currentTime) {
        const elapsedTime = currentTime - startTime;
        const progress = Math.min(elapsedTime / duration, 1); // Progress ratio (0 to 1)
        const currentValue = Math.floor(progress * targetValue);
        counterElement.textContent = currentValue;

        if (progress < 1) {
          requestAnimationFrame(updateCounter); // Keep animating
        } else {
          counterElement.textContent = targetValue; // Ensure the final value is exact
        }
      }

      requestAnimationFrame(updateCounter);
    }

    // Function to check if the section is in view
    function isSectionInView() {
      const section = document.getElementById("experience");
      const rect = section.getBoundingClientRect();
      return rect.top <= window.innerHeight && rect.bottom >= 0;
    }

    // Scroll event listener to start animation when in view
    function handleScroll() {
      if (!hasAnimated && isSectionInView()) {
        counters.forEach(counter => {
          const counterElement = document.getElementById(counter.id);
          animateCounter(counterElement, counter.targetValue, counter.duration);
        });
        hasAnimated = true; // Ensure the animation runs only once
      }
    }

    window.addEventListener("scroll", handleScroll);
    handleScroll(); // Trigger scroll check immediately on page load
  });
</script>
