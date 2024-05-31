export function formatDate() {
    const today = new Date();
  
    // Define month names
    const monthNames = [
      "January", "February", "March", "April", "May", "June",
      "July", "August", "September", "October", "November", "December"
    ];
  
    // Get the day, month, and year
    const day = today.getDate();
    const month = monthNames[today.getMonth()];
    const year = today.getFullYear();
  
    // Format the date
    const formattedDate = `${day} ${month} ${year}`;
    return formattedDate;
  }
  
  // Usage
