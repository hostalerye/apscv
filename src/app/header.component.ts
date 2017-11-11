import { Component } from '@angular/core';
import { PageScrollConfig } from 'ng2-page-scroll';

@Component({
    selector: 'app-header',
    templateUrl: './header.component.html',
    styleUrls: ['./header.component.css']
})
export class HeaderComponent {
    isCollapsed = true;

    constructor() {
        PageScrollConfig.defaultScrollOffset = 76;
        PageScrollConfig.defaultDuration = 300;
    }
}
