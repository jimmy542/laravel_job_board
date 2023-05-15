<template>
  <div>
    <Collapse title="Collapse Example">
      <p>Content of the collapse</p>
    </Collapse>
    <Dropdown label="Dropdown Example">
      <ul>
        <li>Option 1</li>
        <li>Option 2</li>
        <li>Option 3</li>
      </ul>
    </Dropdown>
  </div>
</template>

<script>
import { Collapse, Dropdown } from 'tw-elements';

export default {
  components: {
    Collapse,
    Dropdown,
  },
};
</script>
