<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Example</title>
  <link href="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp" rel="stylesheet">
  <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
</head>
<body>
  <section class="py-10 bg-gray-50 sm:py-16 lg:py-24">
    
        <div class="max-w-3xl mx-auto mt-8 space-y-4 md:mt-16">
            <!-- Shortened question and answer blocks -->
            <!-- Question 1 -->
            <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                <button type="button" id="question1" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black">How can I apply for a E-ration card?</span>
                    <svg id="arrow1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer1" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>To apply for a E-ration card, go to download ,fill the form ,click the submit button,and get your E-ration card</p>
                </div>
            </div>
            <!-- Question 2 -->
            <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                <button type="button" id="question2" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black">What benefits or subsidies are available to ration cardholders?</span>
                    <svg id="arrow2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer2" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Ration cardholders typically receive benefits such as subsidized food items, cooking gas, and other essential commodities provided by the government.</p>
                </div>
            </div>
            <!-- Question 3 -->
            <div class="transition-all duration-200 bg-white border border-gray-200 shadow-lg cursor-pointer hover:bg-gray-50">
                <button type="button" id="question3" data-state="closed" class="flex items-center justify-between w-full px-4 py-5 sm:p-6">
                    <span class="flex text-lg font-semibold text-black">Are there any eligibility criteria for obtaining a ration card, and who is eligible to apply?</span>
                    <svg id="arrow3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                        class="w-6 h-6 text-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div id="answer3" style="display:none" class="px-4 pb-5 sm:px-6 sm:pb-6">
                    <p>Eligibility criteria for a ration card vary but generally consider factors like income level, family size, citizenship status, and residence.</p>
                </div>
            </div>
        
        
    </div>
    <script>
        // JavaScript to toggle the answers and rotate the arrows
        document.querySelectorAll('[id^="question"]').forEach(function(button, index) {
            button.addEventListener('click', function() {
                var answer = document.getElementById('answer' + (index + 1));
                var arrow = document.getElementById('arrow' + (index + 1));

                if (answer.style.display === 'none' || answer.style.display === '') {
                    answer.style.display = 'block';
                    arrow.style.transform = 'rotate(0deg)';
                } else {
                    answer.style.display = 'none';
                    arrow.style.transform = 'rotate(-180deg)';
                }
            });
        });
    </script>
</section>
</body>
</html>

