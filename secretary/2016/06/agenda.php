<?
$short_desc = "Agenda DRAFT";
$long_sec = $short_desc;
$file = "agenda.php";
include_once("subpage.php");

function ticket($num) {
    return "<a href=\"https://svn.mpi-forum.org/trac/mpi-forum-web/ticket/$num\">".$num."</a>";
}

agenda_day_start("Monday, June 6, 2016 - Working Groups");
agenda_item(" 2:00pm -   3:30pm", "WG time");
agenda_item(" 3:30pm -   4:00pm", "Break");
agenda_item(" 4:00pm -   5:30pm", "WG time");
agenda_day_end();

agenda_day_start("Tuesday, June 7, 2016 - Working Groups");
agenda_item(" 9:00am - 10:30am", "WG time");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", "WG time");
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:00pm", "WG time");
agenda_item(" 3:00pm - 3:30pm", "Break");
agenda_item(" 3:30pm - 5:30pm", "WG time");
agenda_day_end();


agenda_day_start("Wednesday, June 8, 2016 - Plenary");
$p = "Plenary Discussions (see agenda, below)";
agenda_item(" 9:00am - 10:30am", $p);
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:30pm", $p);
agenda_item(" 12:30pm -  1:30pm", "Lunch (provided)");
agenda_item(" 1:30pm - 3:30pm", $p);
agenda_item(" 3:30pm - 4:00pm", "Break");
agenda_item(" 4:30pm - 6:00pm", $p);

agenda_item(" 6:30pm (?) - ...", "Dinner (optional, pay on your own)");

agenda_day_end();

agenda_day_start("Thursday, June 9, 2016 - Plenary");
agenda_item(" 9:00am - 9:30am", "Votes");
agenda_item("                ", "Procudure Votes:");
agenda_item("                ","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception");
agenda_item("                ", "No No Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">#1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">#3</a>: Define
            new MPI Error handler for subcommunicator abort");
agenda_item("                ", "Errata Votes:");
agenda_item("                ", "First Votes:");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/1\">#1</a>: Clarify MPI_ERRORS_ARE_FATAL scope of abort");
agenda_item("                ", "<a href=\"https://github.com/mpi-forum/mpi-issues/issues/3\">#3</a>: Define new MPI Error handler for subcommunicator abort");
agenda_item("                ", "Second Votes:");
agenda_item(" 9:30am - 10:30am", "Plenary Discusssions (agenda, see below)");
agenda_item(" 10:30am - 11:00am", "Break");
agenda_item(" 11:00am - 12:00pm", "Plenary Discusssions (agenda, see below)");
agenda_item(" 12:00pm          ", "Close");
agenda_day_end();


agenda_plenary_start("Plenary Items to be Discussed",0);
plenary_item("Opening","Update on WG status","All WG chairs or their proxies",0);
plenary_item("","Git Transition Update","Wesley",0);
plenary_item("Procedures Reading","<a href=\"https://github.com/mpi-forum/mpi-issues/issues/35\">#35</a>: Procedure Changes: Allow move of voting block as an exception","Martin",0);
plenary_item("","Administrative items for the MPI Forum","Martin",0);
agenda_plenary_end();

include_once("$topdir/include/footer.php");
?>
