  // const ctx = document.getElementById('AttendanceRecChart');
      
  //     // Chart 1's Functionality
      
  //     new Chart(ctx, {
  //       type: 'bar',
  //       data: {
  //         labels: ['Week 1', 'Week 2', 'Week 3'],
  //         datasets: [{
  //           label: '# of my weekly attendance records as of April 1 - 30, 2025',
  //           hoverBackgroundColor: "dodgerblue",
  //           data: [30, 28, 27],
  //           borderWidth: 1
  //         }]
  //       },
  //       options: 
  //       {
  //         scales: {
  //           x: {
  //             ticks: 
  //             {
  //               color: 'yellow',
  //               font:
  //               {
  //                 size: '15'
  //               }
  //             }
  //           },
  //           y: {
  //             beginAtZero: true,
  //             ticks: 
  //             {
  //               color: 'yellow',
  //               font:
  //               {
  //                 size: '15'
  //               }
  //             }
  //           }
  //         },
  //         plugins: 
  //         {
  //           title: 
  //           {
  //             display: true,
  //             text: 'My Monthly Attendance Records gained from April 2025',
  //             color: 'yellow',
  //             font: 
  //             {
  //               size: '15'
  //             }
  //           },
  //           legend: 
  //           {
  //             display: true,
  //             labels: 
  //             {
  //               color: 'yellow',
  //               font:
  //               {
  //                 size: '15'
  //               }
  //             }
  //           }
  //         },
  //         responsive: true
  //       }
  //     });

      
  //     // Chart 2
      
  //     const ctx2 = document.getElementById('ActivityRecChart');
      
  //     // Chart 2's Functionality
      
  //     const doughnut = new Chart(ctx2,
  //       {
  //           type: 'doughnut',
  //           data: 
  //           {
  //               labels: ['Work Efficiency', 'Technology Integration', 'Time Constraint', 'Work from Home', 'Discussions or Meeting'],
  //               datasets: 
  //               [
  //                   {
  //                       label: '% of your Activity gained from April 2025',
  //                       data: [100, 90, 70, 2, 80],
  //                       backgroundColor: 
  //                       [
  //                           'rgba(39, 255, 0)',
  //                           'rgba(39, 255, 0)',
  //                           'rgba(255, 197, 0)',
  //                           'rgba(244, 255, 0.8',
  //                           'rgba(39, 255, 0)',
  //                       ],
  //                       borderColor: 
  //                       [
  //                           'rgba(43, 229, 43)',
  //                           'rgba(43, 229, 43)',
  //                           'rgba(225, 237, 43)',
  //                           'rgba(218, 177, 23)',
  //                           'rgba(43, 229, 43)'
  //                       ],
  //                       borderWidth: 1
  //                   }
  //               ]
  //           },
  //           options: {
  //               scale: {
  //                 x: {
  //                     ticks: 
  //                     {
  //                       color: 'yellow',
  //                       font:
  //                       {
  //                         size: '15'
  //                       }
  //                     }
  //                   },
  //                   y: {
  //                       beginAtZero: true,
  //                       ticks: 
  //                       {
  //                         color: 'yellow',
  //                         font:
  //                         {
  //                           size: '15'
  //                         }
  //                       }
  //                   }
  //               },
  //               plugins: 
  //               {
  //                   title: 
  //                   {
  //                       display: true,
  //                       text: 'My Overall Activity gained from April 2025',
  //                       color: 'yellow',
  //                       font: 
  //                       {
  //                         size: '15'
  //                       }
  //                   },
  //                   legend: 
  //                   {
  //                     display: true,
  //                     labels: 
  //                     {
  //                       color: 'yellow',
  //                       font:
  //                       {
  //                         size: '15'
  //                       }
  //                     }
  //                   }
  //               },
  //               responsive: true
  //           }
  //       }
  //     );
      
      // Time and Date Functionality

function updateDateTime()
{
  
  // Date
  
  const now = new Date();
  
  const dateOptions =
  {
    year: 'numeric',
    month: 'long',
    day: 'numeric'
  };
  
  const formattedDate = now.toLocaleDateString(undefined, dateOptions);
  document.getElementById('date').textContent = formattedDate;
  
  // Time
  
  const timeOptions =
  {
    hour: '2-digit',
    minute: '2-digit',
    second: '2-digit'
  };
  
  const formattedTime = now.toLocaleDateString(undefined, timeOptions);
  document.getElementById('time').textContent = formattedTime;
}

updateDateTime();

setInterval(updateDateTime, 1000);
