<template>
  <div>
  
    <div>
      <span class="font-light text-sm">{{job.company}}</span>
    </div>
    <div>
      <span class="font-bold text-sm">{{job.area}}</span>
    </div>
    <div>
      <span class="font-bold text-sm">{{job.city}}</span>
    </div>
    <span :class="calculateDistance(job.lat, job.long) < 10 ? 'inline-block py-1 px-2 text-xs font-bold rounded-md bg-green-500 text-white' : 'inline-block py-1 px-2 text-xs font-bold rounded-md bg-indigo-900 text-white'">
    Distance: {{ calculateDistance(job.lat, job.long) }} km
  </span>
  </div>
</template>

<script setup>
  // Define the starting latitude and longitude
  const startLatitude = 53.4308;
  const startLongitude = -1.3569;

  // Function to calculate the distance between two points using Haversine formula
  const calculateDistance = (latitude, longitude) => {
    const earthRadius = 6371; // radius of the Earth in kilometers

    // Convert latitude and longitude from degrees to radians
    const lat1 = deg2rad(startLatitude);
    const lon1 = deg2rad(startLongitude);
    const lat2 = deg2rad(latitude);
    const lon2 = deg2rad(longitude);

    // Calculate the differences between latitudes and longitudes
    const dLat = lat2 - lat1;
    const dLon = lon2 - lon1;

    // Calculate the distance using Haversine formula
    const a = Math.sin(dLat / 2) * Math.sin(dLat / 2) +
      Math.cos(lat1) * Math.cos(lat2) *
      Math.sin(dLon / 2) * Math.sin(dLon / 2);
    const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
    const distance = earthRadius * c;

    return distance.toFixed(2); // Return the distance rounded to 2 decimal places
  }

  // Helper function to convert degrees to radians
  const deg2rad = (degrees) => {
    return degrees * (Math.PI / 180);
  }

  // Define the job object prop
  defineProps({
    job: Object
  });
</script>
