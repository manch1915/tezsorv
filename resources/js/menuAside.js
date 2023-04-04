import {
  mdiAccountCircle,

  mdiGithub,
  mdiLock,
  mdiAlertCircle,
  mdiSquareEditOutline,
  mdiTable,
  mdiViewList,
  mdiTelevisionGuide,
  mdiResponsive,
  mdiPalette,
  mdiReact,
} from "@mdi/js";

export default [
  {
    route: "dashboard",
    icon: mdiTable,
    label: "Dashboard",
  },
  {
    route: "cheatsheet",
    icon: mdiTable,
    label: "CheatSheets",
  },
  {
    route: "tables",
    label: "Tables",
    icon: mdiTable,
  },
  {
    route: "forms",
    label: "Forms",
    icon: mdiSquareEditOutline,
  },
  {
    route: "ui",
    label: "UI",
    icon: mdiTelevisionGuide,
  },
  {
    route: "responsive",
    label: "Responsive",
    icon: mdiResponsive,
  },
  {
    route: "style",
    label: "Styles",
    icon: mdiPalette,
  },
  {
    route: "profile",
    label: "Profile",
    icon: mdiAccountCircle,
  },
  {
    route: "login",
    label: "Login",
    icon: mdiLock,
  },
  {
    route: "error",
    label: "Error",
    icon: mdiAlertCircle,
  },
  {
    label: "Dropdown",
    icon: mdiViewList,
    menu: [
      {
        label: "Item One",
      },
      {
        label: "Item Two",
      },
    ],
  }
];
