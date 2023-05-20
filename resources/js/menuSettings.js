import {
  mdiMemory,
  mdiAccountBox,
  mdiChevronDoubleUp,
  mdiSecurity
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
      {
        icon: mdiSecurity,
        label: "Անվտանգություն",
        to: "security",
      },

];
