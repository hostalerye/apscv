import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { NgbModule } from '@ng-bootstrap/ng-bootstrap';
import { Ng2PageScrollModule } from 'ng2-page-scroll';
import { AppComponent } from './app.component';
import { HeaderComponent } from './header.component';

@NgModule({
    declarations: [
        AppComponent,
        HeaderComponent
    ],
    imports: [
        NgbModule.forRoot(),
        BrowserModule,
        Ng2PageScrollModule
    ],
    providers: [],
    bootstrap: [AppComponent]
})

export class AppModule { }
