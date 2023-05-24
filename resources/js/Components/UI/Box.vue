<template>
  <div class="border-solid border-2 border-indigo-900 rounded-md p-2 shadow-sm dark:text-salate-900">
    <div class="text-salate-900 font-medium mb-1">
      <slot name="header" />
    </div>
    <slot/>
  </div>
</template>