  <!-- OUR JOURNEY SECTION ONLY -->
  <section class="py-5 bg-gray-50">
    <div class="container mx-auto px-4">
      <div class="text-center mb-16">
        <h2 class="text-sm font-bold text-[#D4AF37] mb-4 tracking-wider">OUR JOURNEY</h2>
        <h3 class="text-4xl md:text-5xl font-bold text-[#0A2540]">Milestones That Define Us</h3>
      </div>

      <div class="relative">
        <!-- Central Horizontal Line -->
        <div
          class="absolute top-1/2 left-0 w-full h-1 bg-gray-300 transform -translate-y-1/2 z-0 hidden md:block">
        </div>

        <!-- Timeline Container -->
        <div id="timeline-container"
          class="flex justify-between items-center relative flex-wrap md:flex-nowrap z-10 gap-y-12 md:gap-y-0">
        </div>
      </div>
    </div>
  </section>

  <script>
    // Timeline data
    const timelineEvents = [
      {
        year: 2012,
        event: "Company Founded",
        description: "DC Indo Global begins with a mission to reshape the construction landscape."
      },
      {
        year: 2014,
        event: "First Major Project",
        description: "We deliver our first large-scale commercial complex, establishing a new benchmark for quality and execution."
      },
      {
        year: 2025,
        event: "In-House Manufacturing",
        description: "We launch our own manufacturing units for modular furniture."
      }
    ];

    // Render timeline with up-down alternating layout
    function renderTimeline() {
      const container = document.getElementById("timeline-container");

      timelineEvents.forEach((item, index) => {
        const isEven = index % 2 === 0;

        const timelineItem = document.createElement("div");
        timelineItem.className = `
          relative flex flex-col items-center md:w-1/5 w-full text-center
        `;

        timelineItem.innerHTML = `
          <!-- Top Card (Desktop Even Items) -->
          ${isEven
            ? `
              <div class="hidden md:block mb-12 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-64">
                <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
                <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
                <p class="text-gray-600 text-sm">${item.description}</p>
              </div>
              <!-- Connector -->
              <div class="hidden md:block w-0.5 h-24 bg-gray-300"></div>
            `
            : `
              <div class="hidden md:block h-20"></div>
            `
          }

          <!-- Dot -->
          <div class="w-6 h-6 bg-[#0A2540] rounded-full border-2 border-white shadow-md relative z-10"></div>

          <!-- Bottom Card (Desktop Odd Items) -->
          ${!isEven
            ? `
              <div class="hidden md:block w-0.5 h-20 bg-gray-300"></div>
              <div class="hidden md:block mt-12 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-64">
                <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
                <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
                <p class="text-gray-600 text-sm">${item.description}</p>
              </div>
            `
            : `
              <div class="hidden md:block h-20"></div>
            `
          }

          <!-- Mobile Layout (All in one flow) -->
          <div class="md:hidden mt-6 p-6 bg-white shadow-lg rounded-2xl border border-gray-100 w-full">
            <p class="text-[#D4AF37] font-bold text-xl mb-1">${item.year}</p>
            <h4 class="text-[#0A2540] font-bold text-lg mb-2">${item.event}</h4>
            <p class="text-gray-600 text-sm">${item.description}</p>
          </div>
        `;

        container.appendChild(timelineItem);
      });
    }

    document.addEventListener("DOMContentLoaded", renderTimeline);
  </script>
