<x-app-layout>
    <div class="container">
        <div class="d-flex flex-column ">
            <h1 class="h1">Knowledge Base</h1>
        <h3 class="h3">Hardware Issues</h3></div>
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Central Processing Unit (CPU): Overheating or processing errors
                    </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        Check for proper cooling (fans, heatsinks, etc.). Ensure correct application of thermal paste.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Random Access Memory (RAM): System instability, boot failures, data corruption.
                    </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Use tools like MemTest86 to check for RAM errors.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Hard Disk Drive (HDD) / Solid State Drive (SSD): HDD: Mechanical failures, bad sectors. SSD: Firmware issues, wear over time.
                    </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Regularly back up your data. Use built-in tools for disk cleanup and defragmentation (HDDs). Consider replacing a failing drive with an SSD.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Power Supply Unit (PSU): Unexpected shutdowns, inability to power on, burning smells.
                    </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Check connections and replace if necessary.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Motherboard: BIOS corruption, physical damage.
                    </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Inspect for blown capacitors or other visible damage.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Graphics Processing Unit (GPU): Overheating, artifacting, no image output.
                    </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Monitor GPU temperature. Check for strange visuals (artifacting). Ensure proper connections.</div>
                </div>
            </div>
        </div>
        <div class="d-flex flex-column ">
        <h3 class="h3">Software Issues</h3></div>
        <div class="accordion accordion-flush2" id="accordionFlushExample2">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                        Install Updates
                    </button>
                </h2>
                <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">
                    Keep your operating system, device drivers, BIOS, and other programs up to date.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                    Reset BIOS and Hardware Settings
                    </button>
                </h2>
                <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">If you’ve made changes, revert them to defaults.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                    Check Hardware Installation
                    </button>
                </h2>
                <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">Ensure all components are properly installed.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
                    Test Hardware
                    </button>
                </h2>
                <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample2">
                    <div class="accordion-body">Use diagnostic tools to identify issues (e.g., CrystalDiskInfo for drives, MemTest86 for RAM)</div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
