const blends = {
    "AROMATIC_ELIXIR": {
      "name": "aromatic-elixir",
      "flavour_level": 70,
      "roast_level": 60,
      "best_time_to_drink": 30,
      "link": "/product/aromatic-elixir/"
    },
    "BOLD_BOURBON": {
      "name": "bold-bourbon",
      "flavour_level": 90,
      "roast_level": 90,
      "best_time_to_drink": 60,
      "link": "/product/bold-bourbon/"
    },
    "EXOTIC_ESCAPE": {
      "name": "exotic-escape",
      "flavour_level": 80,
      "roast_level": 90,
      "best_time_to_drink": 50,
      "link": "/product/exotic-escape/"
    },
    "HERBAL_INFUSION": {
      "name": "herbal-infusion",
      "flavour_level": 30,
      "roast_level": 20,
      "best_time_to_drink": 10,
      "link": "/product/herbal-infusion/"
    },
    "MORNING_BOOST": {
      "name": "morning-boost",
      "flavour_level": 70,
      "roast_level": 50,
      "best_time_to_drink": 30,
      "link": "/product/morning-boost/"
    },
    "SMOOTH_SYMPHONY": {
      "name": "smooth-symphony",
      "flavour_level": 80,
      "roast_level": 70,
      "best_time_to_drink": 50,
      "link": "/product/smooth-symphony/"
    },
    "SPICED_AWAKENING": {
      "name": "spiced-awakening",
      "flavour_level": 60,
      "roast_level": 50,
      "best_time_to_drink": 40,
      "link": "/product/spiced-awakening/"
    },
    "VELVET_DREAM": {
      "name": "velvet-dream",
      "flavour_level": 40,
      "roast_level": 30,
      "best_time_to_drink": 10,
      "link": "/product/velvet-dream/"
    }
  };

jQuery(document).ready(function ($) {
    $(window).scroll(function(){
        if ($(this).scrollTop() > 50) {
           $('.top-header').addClass('scrolled');
        } else {
           $('.top-header').removeClass('scrolled');
        }
    });

    var flavourSlider = document.getElementById("selected-flavour-preference");
    var flavourOutput = document.getElementById("selected-flavour-preference-output");
    flavourOutput.innerHTML = "Balanced"; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    flavourSlider.oninput = function() {
        if (this.value < 33 ) {
            flavourOutput.innerHTML = "Mild/Mellow";
        } else if (this.value < 66 ) {
            flavourOutput.innerHTML = "Balanced";
        } else {
            flavourOutput.innerHTML = "Bold/Intense";
        }
    }

    var roastSlider = document.getElementById("selected-roast-level-preference");
    var roastOutput = document.getElementById("selected-roast-level-preference-output");
    roastOutput.innerHTML = "Medium"; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    roastSlider.oninput = function() {
        if (this.value < 33 ) {
            roastOutput.innerHTML = "Light";
        } else if (this.value < 66 ) {
            roastOutput.innerHTML = "Medium";
        } else {
            roastOutput.innerHTML = "Dark";
        }
    }

    var timeSlider = document.getElementById("selected-time-preference");
    var timeOutput = document.getElementById("selected-time-preference-output");
    timeOutput.innerHTML = "Midday"; // Display the default slider value

    // Update the current slider value (each time you drag the slider handle)
    timeSlider.oninput = function() {
        if (this.value < 33 ) {
            timeOutput.innerHTML = "Morning";
        } else if (this.value < 66 ) {
            timeOutput.innerHTML = "Midday";
        } else {
            timeOutput.innerHTML = "Afternoon";
        }
    }



});

function findBestCoffeeBlend() {
    const flavourLevel = parseInt(document.getElementById('selected-flavour-preference').value);
      const roastLevel = parseInt(document.getElementById('selected-roast-level-preference').value);
      const bestTimeToDrink = parseInt(document.getElementById('selected-time-preference').value);

      let bestMatch = null;
      let bestMatchScore = 0;

      for (const blend in blends) {
        const blendData = blends[blend];
        const flavourScore = Math.abs(blendData.flavour_level - flavourLevel);
        const roastScore = Math.abs(blendData.roast_level - roastLevel);
        const timeScore = Math.abs(blendData.best_time_to_drink - bestTimeToDrink);

        const totalScore = flavourScore + roastScore + timeScore;

        if (bestMatch === null || totalScore < bestMatchScore) {
          bestMatch = blendData;
          bestMatchScore = totalScore;
        }
      }

    document.getElementById(bestMatch.name).classList.remove('hidden');
    document.getElementById(bestMatch.name).classList.add('best-match');
    document.querySelector('.title-text-blender-finder').innerHTML = "Our Recommendation";
    document.querySelector('.blend-finder').classList.add('hidden');
    document.querySelector('.go-back-holder').classList.remove('hidden');
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
  });
}

function startOver() {
  document.querySelector('.best-match').classList.add('hidden');
  document.querySelector('.best-match').classList.remove('best-match');
  document.querySelector('.title-text-blender-finder').innerHTML = "Blend Finder";
  document.querySelector('.blend-finder').classList.remove('hidden');
  document.querySelector('.go-back-holder').classList.add('hidden');
  window.scrollTo({
    top: 0,
    behavior: 'smooth'
});
}

