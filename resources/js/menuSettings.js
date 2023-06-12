import {
  mdiMemory,
  mdiAccountBox,
  mdiChevronDoubleUp
} from "@mdi/js";

export default [
      {
        icon: mdiMemory,
        label: "Անձնական տվյալներ",
        to: "personalDetails",
      },
      {
        icon: mdiAccountBox,
        label: "Կոնտակտային տվյալներ",
        to: "contactDetails",
      },
      {
        icon: mdiChevronDoubleUp,
        label: "Կարգավիճակի բարձրացում",
        to: "upgrade",
      },
];
