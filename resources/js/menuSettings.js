import {
  mdiMemory,
  mdiAccountBox,
  mdiChevronDoubleUp,
  mdiSecurity
} from "@mdi/js";

export default [
      {
        icon: mdiMemory,
        label: "Персональная информация",
        to: "personalDetails",
      },
      {
        icon: mdiAccountBox,
        label: "Контактная информация",
        to: "contactDetails",
      },
      {
        icon: mdiChevronDoubleUp,
        label: "Повышение статуса",
        to: "upgrade",
      },
      {
        icon: mdiSecurity,
        label: "Безопасность",
        to: "security",
      },

];
