// document.getElementById('iwacForm').addEventListener('submit', async function(event) {
//     event.preventDefault();
    
//     // Gather form data
//     const formData = new FormData(this);

//     try {
//         const response = await fetch('send_email.php', {
//             method: 'POST',
//             body: formData
//         });
//         const result = await response.text();

//         if (result.trim() === "success") {
//             alert('Thank you! Your message has been sent successfully.');
//             this.reset();
//             document.getElementById('closeModal').click();
//         } else {
//             alert('Error: ' + result);
//         }
//     } catch (error) {
//         alert('Submission failed: ' + error.message);
//     }
// });

  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      items: 1,             // Show one item at a time
      margin: 20,           // Space between items
      loop: true,           // Loop the carousel
      autoplay: true,       // Auto-play feature
      autoplayTimeout: 5000,// Time between slides
      responsive: {
        0: { items: 1 },    // 1 item for small screens
        768: { items: 2 },  // 1 item for tablets
        1200: { items: 1 }  // 1 item for larger screens
      }
    });
  });


  $(document).ready(function() {
    function initClientCarousel() {
        const track = $('#clientTrack');
        const slides = track.children().clone(true);
        
        // Add two sets of cloned slides for seamless loop
        track.append(slides.clone(true));
        track.append(slides.clone(true));
        
        let isHovered = false;
        let startX = 0;
        let scrollLeft = 0;
        const speed = 1; // Pixels per frame
        
        function updateScroll() {
            if (!isHovered) {
                scrollLeft += speed;
                const slideWidth = slides.length * $('.client-slide').outerWidth(true);
                
                // Reset position seamlessly when reaching one complete set
                if (scrollLeft >= slideWidth) {
                    scrollLeft = 0;
                }
                
                // Apply the transform with GPU acceleration
                track.css('transform', `translate3d(${-scrollLeft}px, 0, 0)`);
            }
            requestAnimationFrame(updateScroll);
        }
        
        // Start the animation
        requestAnimationFrame(updateScroll);
        
        // Handle hover states
        track.on('mouseenter touchstart', function() {
            isHovered = true;
        }).on('mouseleave touchend', function() {
            isHovered = false;
        });
        
        // Handle window resize
        $(window).on('resize', function() {
            // Adjust scrollLeft to maintain position
            const slideWidth = slides.length * $('.client-slide').outerWidth(true);
            if (scrollLeft >= slideWidth) {
                scrollLeft = scrollLeft % slideWidth;
            }
        });
    }
    
    // Initialize carousel
    initClientCarousel();
});